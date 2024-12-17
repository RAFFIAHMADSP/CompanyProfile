<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // ADMIN
    public  function dashboard()
    {
        return view('admin.dashboardAdmin');
    }
    // ADMIN END

    
    // USER
    public function UserDashboard() {
        return view('user.index');
    }
    // USER END
}
