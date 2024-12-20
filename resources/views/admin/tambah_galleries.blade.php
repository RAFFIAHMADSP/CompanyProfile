@extends('admin.layout.app')

@section('title', 'tambah galleries')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">galleries</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.Galleries_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input type="text" class="form-control" id="title" name="title" >
                            <div class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">image</label>
                            <input type="file" class="form-control" id="image" name="image" >
                            <div class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descriptions" class="form-label">Descriptions</label>
                            <input type="Text" class="form-control" id="descriptions" name="descriptions" >
                            <div class="text-danger">
                                @error('descriptions')
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
