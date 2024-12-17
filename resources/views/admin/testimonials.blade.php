@extends('backend.admin.layouts.app')

@section('title', 'Testimonials')

@section('content')

<div class="col-lg-12">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">testimonials</h5>
            <div class="table-responsive">
                <table class="table text-nowrap align-middle mb-0" id="testimonials">
                    <thead>
                        <tr class="border-2 border-bottom border-primary border-0">
                            <th scope="col">No</th>
                            <th scope="col">id_products</th>
                            <th scope="col">client_name</th>
                            <th scope="col">client_company</th>
                            <th scope="col">testimonial</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($testimonialss as $testimonials)
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
        $('#testimonials').DataTable();
    });
</script>

@endsection
