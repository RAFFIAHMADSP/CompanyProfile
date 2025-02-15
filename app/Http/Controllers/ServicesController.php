<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    // Fungsi untuk menampilkan semua data services di halaman admin
    public function services()
    {
        $services = services::all(); // Mengambil semua data dari tabel services
        return view('admin.services', compact('services')); // Mengirim data ke view admin.services
    }

    // Fungsi untuk menampilkan halaman tambah services
    public function create()
    {
        return view('admin.tambah_services'); // Mengembalikan view untuk menambahkan services baru
    }

    // Fungsi untuk menyimpan data services baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'judul_services' => 'required', // Validasi: judul harus diisi
            'description_services' => 'required', // Validasi: deskripsi harus diisi
        ]);

        // Menyimpan data services ke database
        services::create([
            'judul_services' => $request->judul_services,
            'description_services' => $request->description_services,
        ]);

        // Redirect ke halaman admin.services dengan pesan sukses
        return redirect()->route('admin.Services')->with('success', 'Data Services berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan halaman edit services berdasarkan ID
    public function edit($id_services)
    {
        $services = services::find($id_services); // Mengambil data services berdasarkan ID

        return view('admin.edit_services', compact('services')); // Mengirim data ke view edit_services
    }

    // Fungsi untuk mengupdate data services berdasarkan ID
    public function update(Request $request, $id_services)
    {
        $services = services::find($id_services); // Mengambil data services berdasarkan ID

        $request->validate([
            'judul_services' => 'required', // Validasi: judul harus diisi
            'description_services' => 'required', // Validasi: deskripsi harus diisi
        ]);

        // Mengupdate data services
        $services->update([
            'judul_services' => $request->judul_services,
            'description_services' => $request->description_services,
        ]);

        // Redirect ke halaman admin.Services dengan pesan sukses
        return redirect()->route('admin.Services', $id_services)->with('success', 'Data services berhasil diupdate');
    }

    // Fungsi untuk menghapus data services berdasarkan ID
    public function delete($id_services)
    {
        $services = services::find($id_services); // Mengambil data services berdasarkan ID

        $services->delete(); // Menghapus data services dari database

        return redirect()->back()->with('success', 'Data services berhasil dihapus.'); // Redirect dengan pesan sukses
    }

    // // Fungsi untuk menampilkan halaman Air Services untuk user
    // public function airServices()
    // {
    //     $companyProfile = CompanyProfile::all(); // Mengambil semua data dari tabel CompanyProfile
    //     return view('user.air_services', compact('companyProfile')); // Mengirim data ke view user.air_services
    // }
}
