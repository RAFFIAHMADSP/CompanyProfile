@extends('admin.layout.app')

@section('tittle', 'Tambah Company Profile')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah Tiket</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.CompanyProfile_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="Company_name" class="form-label">Company name</label>
                            <input type="text" class="form-control" id="Company_name" name="Company_name" value="{{ old('Company_name') }}">
                            <div class="text-danger">
                                @error('Company_name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" value="{{ old('logo') }}">
                            <div class="text-danger">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="visi_company" class="form-label">Visi</label>
                            <input type="text" class="form-control" id="visi_company" name="visi_company" value="{{ old('visi_company') }}">
                            <div class="text-danger">
                                @error('visi_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="misi_company" class="form-label">Misi</label>
                            <input type="text" class="form-control" id="misi_company" name="misi_company" value="{{ old('misi_company') }}">
                            <div class="text-danger">
                                @error('misi_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="history" class="form-label">History</label>
                            <input type="text" class="form-control" id="history" name="history" value="{{ old('history') }}">
                            <div class="text-danger">
                                @error('history')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="addres" class="form-label">addres</label>
                            <input type="text" class="form-control" id="addres" name="addres" value="{{ old('addres') }}">
                            <div class="text-danger">
                                @error('addres')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone_company" class="form-label">phone_company</label>
                            <input type="number" class="form-control" id="phone_company" name="phone_company" value="{{ old('phone_company') }}">
                            <div class="text-danger">
                                @error('phone_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email_company" class="form-label">email_company</label>
                            <input type="email" class="form-control" id="email_company" name="email_company" value="{{ old('email_company') }}">
                            <div class="text-danger">
                                @error('email_company')
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
