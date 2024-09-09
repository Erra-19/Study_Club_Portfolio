<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(){
        return view('login.admin');
    }

    public function kurir(){
        return view('login.kurir');
    }
    
    public function staff(){
        echo "halo";
        echo "<h1>". Auth::user()->nama ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

}
