@extends('admin.layout.app')

@section('title', 'Tambah Company Profile')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Tambah data Company</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.CompanyProfile_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" >
                            <div class="text-danger">
                                @error('company_name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="about" class="form-label">About</label>
                            <textarea class="form-control" name="about" id="about" cols="30" rows="10"></textarea>
                            <input type="text" class="form-control" id="about" name="about" >
                            <div class="text-danger">
                                @error('about')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tagline" class="form-label">Tagline</label>
                            <input type="text" class="form-control" id="tagline" name="tagline" >
                            <div class="text-danger">
                                @error('tagline')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo" >
                            <div class="text-danger">
                                @error('logo')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="visi_company" class="form-label">Visi</label>
                            <textarea class="form-control" id="visi_company" name="visi_company"></textarea>
                            <div class="text-danger">
                                @error('visi_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="misi_company" class="form-label">Misi</label>
                            <textarea class="form-control" id="misi_company" name="misi_company"></textarea>
                            <div class="text-danger">
                                @error('misi_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="history" class="form-label">History</label>
                            <textarea class="form-control" id="history" name="history"></textarea>
                            <div class="text-danger">
                                @error('history')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="addres" class="form-label">Address</label>
                            <textarea class="form-control" id="addres" name="addres"></textarea>
                            <div class="text-danger">
                                @error('addres')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone_company" class="form-label">Phone Company</label>
                            <input type="number" class="form-control" id="phone_company" name="phone_company">
                            <div class="text-danger">
                                @error('phone_company')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email_company" class="form-label">Email Company</label>
                            <input type="email" class="form-control" id="email_company" name="email_company">
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
