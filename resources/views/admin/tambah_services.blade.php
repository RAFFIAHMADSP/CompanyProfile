@extends('admin.layout.app')

@section('title', 'tambah services')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">SERVICES</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.Services_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul_services" class="form-label">Services name</label>
                            <input type="text" class="form-control" id="judul_services" name="judul_services" >
                            <div class="text-danger">
                                @error('judul_services')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="description_services" class="form-label">Descriptions</label>
                            <textarea class="form-control" name="description_services" id="description_services" cols="30" rows="10"></textarea>
                            <div class="text-danger">
                                @error('description_services')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
