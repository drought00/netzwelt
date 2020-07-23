<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class NetzweltController extends Controller
{
    public function login(Request $request){
        if($request->username == "jing" && $request->password == "pass"){
            session(['username'=>$request->username]);
            return view('home');
        }
        return redirect('netzwelt/login')->with('error', 'invalid credentials!');
    }

    public function home(){
        if(session('username')){
            return view('home');
        }
        return redirect('netzwelt/login');
    }

    public function logout(){
        session()->flush();
        return redirect('netzwelt/login');
    }

    public function pub(){
        return view('public');
    }
}
