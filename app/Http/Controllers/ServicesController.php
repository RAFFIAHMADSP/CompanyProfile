<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services(){
        $services = services::all();
        return view('admin.services', compact('services'));
    }

    public function create() {
        return view('admin.tambah_services');
    }
    public function store(Request $request){
        $request->validate([
            'judul_services' => 'required',
            'description_services' => 'required',

        ]);

        services::create([
            'judul_services' => $request->judul_services,
            'description_services' => $request->description_services,
        ]);
        return redirect()->route('admin.Services')->with('success', 'Data Services berhasil ditambahkan!');
    }


    public function edit($id_services) {
        $services = services::find($id_services);

        return view('admin.edit_services', compact('services'));
    }
    public function update(Request $request, $id_services) {
        $services = services::find($id_services);
        $request->validate([
            'judul_services' => 'required',
            'description_services' => 'required',

        ]);

        $services->update([
            'judul_services' => $request->judul_services,
            'description_services' => $request->description_services,
        ]);

        return redirect()->route('admin.Services', $id_services)->with('success', 'Data services berhasil diupdate');
    }

    public function delete($id_services) {
        $services = services::find($id_services);

        $services->delete();

        return redirect()->back()->with('success', 'Data services berhasil dihapus.');
    }


}
