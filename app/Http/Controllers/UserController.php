<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\galleries;
use App\Models\services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // ADMIN
    public  function dashboard()
    {
        return view('admin.dashboardAdmin');
    }

    public function Adminlogout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return  view('Auth.AdminLogin');
    }

    public function profile(){
        // Filter hanya pengguna dengan role 'admin'
        $admin = User::where('role', 'admin')->first();

        // Kirim data admin ke view
        return view('admin.profile', compact('admin'));
    }

    public function profileViewUpdate(){
        $admin = User::where('role', 'admin')->first();

// dd($admins);
        return view('admin.edit_profile', compact('admin'));
    }
    public function updateProfile(Request $request){

        $id_user = Auth::user()->id;
        $admin = User::find($id_user);

        $request->validate([
            'username' => 'required|unique:users,username,' . $id_user . ',id',
            'password' => 'nullable|min:6',
            'name' => 'required',
        ]);

        $admin->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $admin->password,
            'name' => $request->name,
        ]);

        return redirect()->route('admin.profile')->with('success', 'Profile berhasil diupdate');
    }

    // ADMIN END


    // USER
    public function UserDashboard() {
        $companyProfile = CompanyProfile::first();
        $galleris = galleries::all();

        $services = services::get();
        return view('user.index', compact('companyProfile', 'galleris', 'services'));
    }


    // USER END
}
