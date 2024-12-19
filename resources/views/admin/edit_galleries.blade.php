@extends('admin.layout.app')

@section('title', 'edit galleries')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">galleries</h6>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('Galleries_update', $Galleries->id_galleries) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="title" class="form-label">title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $Galleries->title) }}">
                                <div class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">image</label>
                                <input type="file" class="form-control" id="image" name="image">
                                <div class="mb-2"> <img src="{{ asset('storage/' . $Galleries->image) }}"
                                        alt="" height="50"></div>
                                <div class="text-danger">
                                    @error('image')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="descriptions" class="form-label">Descriptions</label>
                                <input type="Text" class="form-control" id="descriptions" name="descriptions"
                                value="{{ old('descriptions', $Galleries->descriptions) }}">
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
