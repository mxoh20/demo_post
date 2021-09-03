<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function __construct()
    {
    $this->middleware(['guest']);
    }

    public function index(){

        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|max:55',
            'username'=>'required|max:55',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed|min:8|max:255'
        ]);

        User::create([
            'username'=>$request->name,
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>hash::make($request->password),
        ]);

       auth()->attempt($request->only('email','password'));

        return  redirect()->route('dashboard');
    }
}
