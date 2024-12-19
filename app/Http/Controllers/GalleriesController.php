<?php

namespace App\Http\Controllers;

use App\Models\galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    public function Galleries() {
        $Galleriess = Galleries::all();
        return view('admin.galleries', compact('Galleriess'));
    }

    public Function create() {

        return view('admin.tambah_Galleries');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'file_url' => 'required',
            'descriptions' => 'required',
        ]);



        $image = null;

        if ($request->hasFile('image')) {
            $uniqueField = uniqid() .'_'.$request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('image_galleries',$uniqueField, 'public');

            $image = 'image_galleries/' . $uniqueField;
        }

        Galleries::create([
            'title' => $request->title,
            'image' => $image,
            'file_url' => $request->file_url,
            'descriptions' => $request->descriptions,
        ]);
        return redirect()->route('admin.Galleries')->with('success', 'Data Galleries berhasil ditambahkan!');
    }

    public function edit($id_galleries) {
        $Galleries = Galleries::find($id_galleries);

        return view('admin.edit_Galleries', compact('Galleries'));
    }

    public function update(Request $request, string $id_galleries)
    {
        $Galleries = Galleries::find($id_galleries);

        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'file_url' => 'nullable',
            'descriptions' => 'nullable',
        ]);

       $image = null;

        if ($request->hasFile('image')) {
            $uniqueField = uniqid() .'_'.$request->file('image')->getClientOriginalName();

            $request->file('image')->storeAs('image_galleries',$uniqueField, 'public');

            $image = 'image_galleries/' . $uniqueField;
        }


        $Galleries->update([
            'title' => $request->title,
            'image' => $image,
            'file_url' => $request->file_url,
            'descriptions' => $request->descriptions,
        ]);

        return redirect()->route('admin.Gall$Galleries', $id_galleries)->with('succsess',' Data siswa berhasil diupdate');
    }

    public function delete($id_galleries){

        $Galleries = galleries::find($id_galleries);

        $image = $Galleries->image;

        if ($Galleries->$image) {
            if (Storage::disk('public')->exists($image)) {
                Storage::disk('public')->delete($image);
            }
        }

        $Galleries->delete();

        return redirect()->back()->with('success', 'Data Galleries berhasil dihapus.');
    }
}
