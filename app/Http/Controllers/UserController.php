<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return  view('Auth.AdminLogin   ');
    }

    public function profile(){
        // Filter hanya pengguna dengan role 'admin'
        $admins = User::where('role', 'admin')->get();

        // Kirim data admin ke view
        return view('admin.profile', compact('admins'));
    }

    // ADMIN END


    // USER
    public function UserDashboard() {
        return view('user.index');
    }
    // USER END
}
