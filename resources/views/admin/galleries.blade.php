@extends('admin.layout.app')

@section('title', 'Galleries')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Galleries</h5>
                <a href="{{ route('admin.Galleries_create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap align-middle mb-0" id="company_profile"
                        style="table-layout: fixed;">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th style="width: 5%;">No</th>
                                <th style="width: 15%;">title</th>
                                <th style="width: 15%;">image</th>
                                <th style="width: 10%;">descriptions</th>
                                <th class="text-center" style="width: 10%;">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($Galleries as $galleri)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <div class="text-wrap">{{ $galleri->title }}</div>
                                    </td>
                                  <td>
                                        <img src="{{ asset('storage/' .$galleri->image) }}" alt="Logo" class="img-thumbnail"
                                            style="max-width: 80px; height: auto;">
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $galleri->descriptions }}</div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('Galleries_edit', $galleri->id_galleries) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <br>
                                        <a href="{{ route('Galleries_delete', $galleri->id_galleries) }}" onclick="return confirm('Yakin ingin hapus data?')"
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
