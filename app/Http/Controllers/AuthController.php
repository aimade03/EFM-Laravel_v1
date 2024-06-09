<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function loginPage(){
        if(Auth::check()){
            return redirect()->back();
        }
        return view('login');
    }
    public function SignPage(){
        if(Auth::check()){
            return redirect()->back();
        }
        return view('signUp');
    }
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();
        return redirect('/login');
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt($data)){
            return redirect('/materiels');
        }
        return redirect('/login');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
