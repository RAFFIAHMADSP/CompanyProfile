@extends('backend.admin.layouts.app')

@section('title', 'services')

@section('content')

    <div class="col-lg-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">services</h5>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0" id="services">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                                <th scope="col">No</th>
                                <th scope="col">judul_services</th>
                                <th scope="col">description_services</th>
                                <th scope="col" class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($CompanyProfiles as $CompanyProfile)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-danger btn-sm">Delete</a>
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
            $('#services').DataTable();
        });
    </script>

@endsection
