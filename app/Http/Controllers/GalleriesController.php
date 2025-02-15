<?php

namespace App\Http\Controllers;

use App\Models\galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleriesController extends Controller
{
    // Fungsi untuk menampilkan semua data galleries di halaman admin
    public function Galleries()
    {
        $Galleries = Galleries::all(); // Mengambil semua data dari tabel galleries
        return view('admin.galleries', compact('Galleries')); // Mengirim data ke view admin.galleries
    }

    // Fungsi untuk menampilkan halaman tambah galleries
    public function create()
    {
        return view('admin.tambah_Galleries'); // Mengembalikan view untuk menambahkan galleries baru
    }

    // Fungsi untuk menyimpan data galleries baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', // Validasi: title harus diisi
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Validasi: image harus berformat jpeg, png, jpg dan maksimal 2MB
            'descriptions' => 'required', // Validasi: descriptions harus diisi
        ]);

        $image = null;

        // Jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            $uniqueField = uniqid() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('image_galleries', $uniqueField, 'public');
            $image = 'image_galleries/' . $uniqueField; // Menyimpan path gambar
        }

        // Menyimpan data galleries ke database
        Galleries::create([
            'title' => $request->title,
            'image' => $image,
            'descriptions' => $request->descriptions,
        ]);

        // Redirect ke halaman admin.Galleries dengan pesan sukses
        return redirect()->route('admin.Galleries')->with('success', 'Data Galleries berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan halaman edit galleries berdasarkan ID
    public function edit($id_galleries)
    {
        $Galleries = Galleries::find($id_galleries); // Mengambil data galleries berdasarkan ID
        return view('admin.edit_Galleries', compact('Galleries')); // Mengirim data ke view edit_Galleries
    }

    // Fungsi untuk mengupdate data galleries berdasarkan ID
    public function update(Request $request, string $id_galleries)
    {
        $Galleries = Galleries::find($id_galleries); // Mengambil data galleries berdasarkan ID

        $request->validate([
            'title' => 'nullable', // Validasi: title bisa dikosongkan
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi: image opsional dan berformat tertentu
            'descriptions' => 'nullable', // Validasi: descriptions bisa dikosongkan
        ]);

        $image = $Galleries->image; // Menyimpan gambar lama jika tidak ada yang baru diunggah

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('image')) {
            $uniqueField = uniqid() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('image_galleries', $uniqueField, 'public');
            $image = 'image_galleries/' . $uniqueField; // Mengupdate path gambar
        }

        // Mengupdate data galleries
        $Galleries->update([
            'title' => $request->title,
            'image' => $image,
            'descriptions' => $request->descriptions,
        ]);

        // Redirect ke halaman admin.Galleries dengan pesan sukses
        return redirect()->route('admin.Galleries', $id_galleries)->with('success', 'Data galleries berhasil diupdate');
    }

    // Fungsi untuk menghapus data galleries berdasarkan ID
    public function delete($id_galleries)
    {
        $Galleries = Galleries::find($id_galleries); // Mengambil data galleries berdasarkan ID

        $image = $Galleries->image; // Mengambil path gambar dari database

        // Jika ada gambar yang tersimpan di storage
        if ($image && Storage::disk('public')->exists($image)) {
            Storage::disk('public')->delete($image); // Menghapus gambar dari penyimpanan
        }

        $Galleries->delete(); // Menghapus data galleries dari database

        return redirect()->back()->with('success', 'Data Galleries berhasil dihapus.'); // Redirect dengan pesan sukses
    }
}
