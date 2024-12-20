@extends('admin.layout.app')

@section('title', 'Contacts')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contacts</h5>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap align-middle mb-0" id="company_profile"
                        style="table-layout: fixed;">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th style="width: 5%;">No</th>
                                <th style="width: 15%;">name</th>
                                <th style="width: 10%;">email</th>
                                <th style="width: 10%;">subject</th>
                                <th style="width: 10%;">message</th>
                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($Contacts as $Contact)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <div class="text-wrap">{{ $Contact->name }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $Contact->email }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $Contact->subject }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $Contact->message }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#company_profile').DataTable({
                "paging": true,
                "searching": true,
                "lengthChange": false,
                "info": false,
                "autoWidth": false,
            });
        });
    </script>

@endsection

<style>
    .text-wrap {
        white-space: normal;
        word-wrap: break-word;
        text-align: left;
    }

    /* Membatasi tinggi teks dan menambahkan scroll untuk kolom dengan banyak teks */
    .scrollable-text {
        max-height: 150px;
        /* Membatasi tinggi kolom */
        overflow-y: auto;
        /* Menambahkan scroll jika teks melebihi batas */
    }

    /* Padding yang lebih konsisten untuk semua kolom */
    td,
    th {
        padding: 12px;
        /* Menambah padding untuk memberi jarak */
        text-align: left;
        /* Menyelaraskan teks ke kiri untuk keterbacaan */
    }

    /* Memastikan lebar kolom cukup untuk teks panjang dan logo */
    td {
        vertical-align: middle;
    }

    /* Agar kolom tidak terpotong, terutama kolom Address dan History */
    .scrollable-text {
        max-height: 150px;
        overflow-y: auto;
    }

    /* Menambahkan border yang lebih jelas di bawah header */
    th {
        border-bottom: 2px solid #dee2e6;
    }
</style>
