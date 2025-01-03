@extends('admin.layout.app')

@section('title', 'Dashboard')

@section('content')
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .dashboard {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .chart-container {
            width: 100%;
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <h1>Dashboard Admin</h1>
        <section class="report-section">
            <h2>Laporan Penjualan Bulanan</h2>

            <!-- Grafik Laporan -->
            <div class="chart-container">
                <canvas id="salesChart"></canvas>
            </div>
        </section>
    </div>

    <!-- Tambahkan Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data Laporan Penjualan
        const reportData = [
            { month: 'Januari', totalSales: 15000000 },
            { month: 'Februari', totalSales: 18000000 },
            { month: 'Maret', totalSales: 20000000 },
            { month: 'April', totalSales: 17000000 },
            { month: 'Mei', totalSales: 22000000 },
            { month: 'Juni', totalSales: 19000000 },
            { month: 'Juli', totalSales: 21000000 },
            { month: 'Agustus', totalSales: 23000000 },
            { month: 'September', totalSales: 24000000 },
            { month: 'Oktober', totalSales: 25000000 },
            { month: 'November', totalSales: 26000000 },
            { month: 'Desember', totalSales: 28000000 },
        ];

        // Render Grafik Penjualan
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar', // Jenis grafik batang
            data: {
                labels: reportData.map(data => data.month), // Label bulan
                datasets: [{
                    label: 'Total Penjualan (Rp)',
                    data: reportData.map(data => data.totalSales), // Data penjualan
                    backgroundColor: '#007bff',
                    borderColor: '#0056b3',
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp' + value.toLocaleString(); // Format Rupiah
                            }
                        }
                    },
                },
            },
        });
    </script>
</body>
@endsection
