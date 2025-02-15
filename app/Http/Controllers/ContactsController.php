<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    // Fungsi untuk menampilkan semua data contacts di halaman admin
    public function Contacts() {
        $Contacts = contacts::all(); // Mengambil semua data dari tabel contacts
        return view('admin.contacts', compact('Contacts')); // Mengirim data ke view admin.contacts
    }

    // Fungsi untuk menampilkan halaman tambah contacts
    public function create() {
        return view('admin.tambah_Contacts'); // Mengembalikan view untuk menambahkan kontak baru
    }

    // Fungsi untuk menyimpan data contacts baru ke dalam database
    public function store(Request $request){
        $request->validate([
            'name' => 'required', // Validasi: name harus diisi
            'email' => 'required', // Validasi: email harus diisi
            'subject' => 'required', // Validasi: subject harus diisi
            'message' => 'required', // Validasi: message harus diisi
        ]);

        // Menyimpan data contacts ke database
        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        // Redirect ke halaman user.dashboard dengan pesan sukses
        return redirect()->route('user.dashboard')->with('success', 'Data Contacts berhasil ditambahkan!');
    }

    // Fungsi untuk menampilkan halaman edit contacts berdasarkan ID
    public function edit($id_company) {
        $Contacts = Contacts::find($id_company); // Mengambil data contacts berdasarkan ID
        return view('admin.edit_Contacts', compact('Contacts')); // Mengirim data ke view edit_Contacts
    }

    // Fungsi untuk mengupdate data contacts berdasarkan ID
    public function update(Request $request, string $id_contacts) {
        $Contacts = Contacts::find($id_contacts); // Mengambil data contacts berdasarkan ID

        $request->validate([
            'name' => 'nullable', // Validasi: name bisa dikosongkan
            'email' => 'nullable', // Validasi: email bisa dikosongkan
            'subjects' => 'nullable', // Validasi: subjects bisa dikosongkan
            'message' => 'nullable', // Validasi: message bisa dikosongkan
        ]);

        // Mengupdate data contacts
        $Contacts->update([
            'name' => $request->name,
            'email' => $request->email,
            'subjects' => $request->subjects,
            'message' => $request->message,
        ]);

        // Redirect ke halaman admin.Contacts dengan pesan sukses
        return redirect()->route('admin.Contacts', $id_contacts)->with('success', 'Data contacts berhasil diupdate');
    }

    // Fungsi untuk menghapus data contacts berdasarkan ID
    public function delete($id_contacts) {
        $Contacts = contacts::find($id_contacts); // Mengambil data contacts berdasarkan ID
        $Contacts->delete(); // Menghapus data contacts dari database

        return redirect()->back()->with('success', 'Data contacts berhasil dihapus.'); // Redirect dengan pesan sukses
    }
}
