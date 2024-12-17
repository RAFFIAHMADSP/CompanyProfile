@extends('backend.admin.layouts.app')

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
                <table class="table text-nowrap align-middle mb-0" id="Contacts">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">No</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">subject</th>
                            <th scope="col">message</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($contactss as $contacts)
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
        $('#contacts').DataTable();
    });
</script>

@endsection
