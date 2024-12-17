@extends('backend.admin.layouts.app')

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
            <h5 class="card-title">galleries</h5>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0" id="galleries">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">No</th>
                            <th scope="col">title</th>
                            <th scope="col">image</th>
                            <th scope="col">file_url</th>
                            <th scope="col">descriptions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($galleriess as $galleries)
                        <tr>
                            <th scope="row">{{  $loop->iteration }}</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
        $('#galleries').DataTable();
    });
</script>

@endsection
