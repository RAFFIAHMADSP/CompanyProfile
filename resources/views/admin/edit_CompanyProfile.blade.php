@extends('admin.layout.app')

@section('tittle', 'Edit Company')

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Edit Company</h6>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('CompanyProfile_update', $CompanyProfile->id_company) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name"
                                value="{{ old('company_name', $CompanyProfile->company_name) }}">
                            <div class="text-danger">
                                @error('company_name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logo" name="logo"
                                value="{{ old('logo', $CompanyProfile->logo) }}">
                            <div class="mb-2"> <img src="{{ asset('storage/' . $CompanyProfile->logo) }}"
                                    alt="" height="70"></div>
                            <div class="text-danger">
                                @error('logo')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="visi_company" class="form-label">Visi</label>
                            <input type="text" class="form-control" id="visi_company" name="visi_company"
                                value="{{ old('visi_company', $CompanyProfile->visi_company) }}">
                            <div class="text-danger">
                                @error('visi_company')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="misi_company" class="form-label">Misi</label>
                            <input type="text" class="form-control" id="misi_company" name="misi_company"
                                value="{{ old('misi_company', $CompanyProfile->misi_company) }}">
                            <div class="text-danger">
                                @error('misi_company')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="history" class="form-label">History</label>
                            <input type="text" class="form-control" id="history" name="history"
                                value="{{ old('history', $CompanyProfile->history) }}">
                            <div class="text-danger">
                                @error('history')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="addres" class="form-label">Address</label>
                            <input type="text" class="form-control" id="addres" name="addres"
                                value="{{ old('addres', $CompanyProfile->addres) }}">
                            <div class="text-danger">
                                @error('addres')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone_company" class="form-label">Phone Company</label>
                            <input type="number" class="form-control" id="phone_company" name="phone_company"
                                value="{{ old('phone_company', $CompanyProfile->phone_company) }}">
                            <div class="text-danger">
                                @error('phone_company')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email_company" class="form-label">Email Company</label>
                            <input type="email" class="form-control" id="email_company" name="email_company"
                                value="{{ old('email_company', $CompanyProfile->email_company) }}">
                            <div class="text-danger">
                                @error('email_company')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection