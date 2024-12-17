<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Http\Request;
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
            'Company_name' => 'required',
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
            'id_kategori_tiket' => $request->id_kategori_tiket,
            'Company_name' => $request->Company_name,
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

}
