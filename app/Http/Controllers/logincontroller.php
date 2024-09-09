<?php

namespace App\Http\Controllers;


use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends  Controller
{
    public function login(Request $request){
        $request->validate([
         'email'=> 'required', 'email',
         'password'=>'required',
        ],[
            'email.required' => 'email wajib di isi',
            'password.required' => 'password wajib di isi',
        ]);
        $data = [
            'email'=> $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($data)){
            if(Auth::user()->pekerjaan == 'admin'){
                return redirect('/admin');
            }elseif(Auth::user()->pekerjaan == 'kurir'){
                return redirect('/admin/kurir');
            }elseif(Auth::user()->pekerjaan == 'staff_gudang'){
                return redirect('/admin/staff');
            }
        }else{
            return redirect('/login')->withErrors('Username dan password tidak sesuai')->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
