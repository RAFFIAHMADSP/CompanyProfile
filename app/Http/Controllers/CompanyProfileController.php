<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    // Menampilkan halaman daftar Company Profile
    public function CompanyProfile() {
        $data = CompanyProfile::count(); // Menghitung jumlah data CompanyProfile
        $CompanyProfiles = CompanyProfile::all(); // Mengambil semua data CompanyProfile
        return view('admin.company_profile', compact('CompanyProfiles', 'data'));
    }

    // Menampilkan halaman tambah Company Profile
    public function create() {
        return view('admin.tambah_CompanyProfile');
    }

    // Menyimpan data Company Profile baru ke database
    public function store(Request $request){
        $request->validate([
            'company_name' => 'required',
            'about' => 'required',
            'tagline' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'visi_company' => 'required',
            'misi_company' => 'required',
            'history' => 'required',
            'addres' => 'required',
            'phone_company' => 'required',
            'email_company' => 'required',
        ]);

        $logo = null;

        // Jika ada file logo yang diunggah, simpan di direktori storage
        if ($request->hasFile('logo')) {
            $uniqueField = uniqid() .'_'.$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('logo_company', $uniqueField, 'public');
            $logo = 'logo_company/' . $uniqueField;
        }

        // Menyimpan data ke database
        CompanyProfile::create([
            'company_name' => $request->company_name,
            'about' => $request->about,
            'tagline' => $request->tagline,
            'logo' => $logo,
            'visi_company' => $request->visi_company,
            'misi_company' => $request->misi_company,
            'history' => $request->history,
            'addres' => $request->addres,
            'phone_company' => $request->phone_company,
            'email_company' => $request->email_company,
        ]);

        return redirect()->route('admin.CompanyProfile')->with('success', 'Data Company berhasil ditambahkan!');
    }

    // Menampilkan halaman edit Company Profile berdasarkan ID
    public function edit($id_company) {
        $CompanyProfile = CompanyProfile::find($id_company);
        return view('admin.edit_CompanyProfile', compact('CompanyProfile'));
    }

    // Memperbarui data Company Profile berdasarkan ID
    public function update(Request $request, string $id_company)
    {
        $CompanyProfile = CompanyProfile::find($id_company);

        $request->validate([
            'company_name' => 'nullable',
            'about' => 'nullable',
            'tagline' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'visi_company' => 'nullable',
            'misi_company' => 'nullable',
            'history' => 'nullable',
            'addres' => 'nullable',
            'phone_company' => 'nullable',
            'email_company' => 'nullable',
        ]);

        $logo = $CompanyProfile->logo;

        // Jika ada logo baru, simpan dan timpa yang lama
        if ($request->hasFile('logo')) {
            $uniqueField = uniqid() .'_'.$request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('logo_company', $uniqueField, 'public');
            $logo = 'logo_company/' . $uniqueField;
        }

        // Memperbarui data di database
        $CompanyProfile->update([
            'company_name' => $request->company_name,
            'about' => $request->about,
            'tagline' => $request->tagline,
            'logo' => $logo,
            'visi_company' => $request->visi_company,
            'misi_company' => $request->misi_company,
            'history' => $request->history,
            'addres' => $request->addres,
            'phone_company' => $request->phone_company,
            'email_company' => $request->email_company,
        ]);

        return redirect()->route('admin.CompanyProfile', $id_company)->with('success', 'Data Company berhasil diupdate');
    }

    // Menghapus Company Profile berdasarkan ID
    public function delete($id_company){
        $CompanyProfile = CompanyProfile::find($id_company);

        // Jika ada logo yang tersimpan, hapus dari storage
        if ($CompanyProfile->logo && Storage::disk('public')->exists($CompanyProfile->logo)) {
            Storage::disk('public')->delete($CompanyProfile->logo);
        }

        $CompanyProfile->delete();

        return redirect()->back()->with('success', 'Data Company berhasil dihapus.');
    }
}
