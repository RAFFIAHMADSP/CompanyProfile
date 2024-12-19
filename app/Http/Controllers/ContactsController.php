<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function Contacts() {
        $Contacts = contacts::all();
        return view('admin.contacts', compact('Contacts'));
    }

    public Function create() {

        return view('admin.tambah_Contacts');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contacts::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return redirect()->route('admin.Contacts')->with('success', 'Data Contacts berhasil ditambahkan!');
    }

    public function edit($id_company) {
        $Contacts = Contacts::find($id_company);

        return view('admin.edit_Contacts', compact('Contacts'));
    }

    public function update(Request $request, string $id_contacts)
    {
        $Contacts = Contacts::find($id_contacts);

        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'subjects' => 'nullable',
            'message' => 'nullable',
        ]);

        $Contacts->update([
            'name' => $request->name,
            'email' => $request->email,
            'subjects' => $request->subjects,
            'message' => $request->message,
        ]);

        return redirect()->route('admin.Contacts', $id_contacts)->with('succsess',' Data siswa berhasil diupdate');
    }

    public function delete($id_contacts){
        $Contacts = contacts::find($id_contacts);
        $Contacts->delete();

        return redirect()->back()->with('success', 'Data contacts berhasil dihapus.');
    }

}
