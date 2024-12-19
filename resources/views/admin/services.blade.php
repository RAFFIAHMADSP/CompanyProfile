@extends('admin.layout.app')

@section('title', 'Company Profile')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Company Profile</h5>
                <a href="{{ route('admin.Services_create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap align-middle mb-0" id="company_profile"
                        style="table-layout: fixed;">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th style="width: 5%;">No</th>
                                <th style="width: 15%;">services name</th>
                                <th style="width: 10%;">descriptions</th>
                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <div class="text-wrap">{{ $service->judul_services }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $service->description_services }}</div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('Services_edit', $service->id_services) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <br>
                                        <a href="{{ route('Services_delete', $service->id_services) }}" onclick="return confirm('Yakin ingin hapus data?')"
                                            class="btn btn-danger btn-sm">Delete</a>
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
