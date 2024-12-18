<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class CompanyProfileController extends Controller
{
    public function CompanyProfile() {
        $CompanyProfiles = CompanyProfile::all();
        return view('admin.company_profile', compact('CompanyProfiles'));
    }

    public Function create() {

        return view('admin.tambah_CompanyProfile');
    }

    public function store(Request $request){
        $request->validate([
            'company_name' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'visi_company' => 'required',
            'misi_company' => 'required',
            'history' => 'required',
            'addres' => 'required',
            'phone_company' => 'required',
            'email_company' => 'required',
        ]);



        $logo = null;

        if ($request->hasFile('logo')) {
            $uniqueField = uniqid() .'_'.$request->file('logo')->getClientOriginalName();

            $request->file('logo')->storeAs('logo_company',$uniqueField, 'public');

            $logo = 'logo_company/' . $uniqueField;
        }

        CompanyProfile::create([
            'company_name' => $request->company_name,
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

    public function edit($id_company) {
        $CompanyProfile = Companyprofile::find($id_company);

        return view('admin.edit_CompanyProfile', compact('CompanyProfile'));
    }

    public function update(Request $request, string $id_company)
    {
        $CompanyProfile = Companyprofile::find($id_company);

        $request->validate([
            'company_name' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'visi_company' => 'nullable',
            'misi_company' => 'nullable',
            'history' => 'nullable',
            'addres' => 'nullable',
            'phone_company' => 'nullable',
            'email_company' => 'nullable',
        ]);

       $logo = null;

        if ($request->hasFile('logo')) {
            $uniqueField = uniqid() .'_'.$request->file('logo')->getClientOriginalName();

            $request->file('logo')->storeAs('logo_company',$uniqueField, 'public');

            $logo = 'logo_company/' . $uniqueField;
        }


        $CompanyProfile->update([
            'company_name' => $request->company_name,
            'logo' => $logo,
            'visi_company' => $request->visi_company,
            'misi_company' => $request->misi_company,
            'history' => $request->history,
            'addres' => $request->addres,
            'phone_company' => $request->phone_company,
            'email_company' => $request->email_company,
        ]);

        return redirect()->route('admin.CompanyProfile', $id_company)->with('succsess',' Data siswa berhasil diupdate');
    }

    public function delete($id_company){

        $CompanyProfile = Companyprofile::find($id_company);

        $logo = $CompanyProfile->logo;

        if ($CompanyProfile->logo) {
            if (Storage::disk('public')->exists($logo)) {
                Storage::disk('public')->delete($logo);
            }
        }

        $CompanyProfile->delete();

        return redirect()->back()->with('success', 'Data Company berhasil dihapus.');
    }

}
