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
                <a href="{{ route('admin.CompanyProfile_create') }}" class="btn btn-primary btn-sm mb-3">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap align-middle mb-0" id="company_profile"
                        style="table-layout: fixed;">
                        <thead>
                            <tr class="border-2 border-bottom border-primary border-0">
                                <th style="text-align: left;">No</th>
                                <th style="text-align: left;">Company</th>
                                <th style="text-align: left;">Tagline</th>
                                <th style="text-align: left;">Logo</th>
                                <th style="text-align: left;">Visi </th>
                                <th style="text-align: left;">Misi </th>
                                <th style="text-align: left;">History</th>
                                <th style="text-align: left;">Address</th>
                                <th style="text-align: left;">Phone</th>
                                <th style="text-align: left;">Email</th>
                                <th class="text-center" style="text-align: left;">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider">
                            @foreach ($CompanyProfiles as $CompanyProfile)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        <div class="text-wrap">{{ $CompanyProfile->company_name }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $CompanyProfile->tagline }}</div>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' .$CompanyProfile->logo) }}" alt="Logo" class="img-thumbnail"
                                            style="max-width: 80px; height: auto;">
                                    </td>
                                    <td>
                                        <div class="text-wrap scrollable-text">{{ $CompanyProfile->visi_company }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap scrollable-text">{{ $CompanyProfile->misi_company }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap scrollable-text">{{ $CompanyProfile->history }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap scrollable-text">{{ $CompanyProfile->addres }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $CompanyProfile->phone_company }}</div>
                                    </td>
                                    <td>
                                        <div class="text-wrap">{{ $CompanyProfile->email_company }}</div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('CompanyProfile_edit', $CompanyProfile->id_company) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <br>
                                        <a href="{{ route('CompanyProfile_delete', $CompanyProfile->id_company) }}" onclick="return confirm('Yakin ingin hapus data?')"
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
