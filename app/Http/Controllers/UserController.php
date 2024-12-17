<?php

namespace App\Http\Controllers;

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
    // ADMIN END


    // USER
    public function UserDashboard() {
        return view('user.index');
    }
    // USER END
}
