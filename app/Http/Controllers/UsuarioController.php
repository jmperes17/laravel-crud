<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class UsuarioController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('estoque');
        }
        return back()->withErrors([
            'email' => 'Email ou senha não conferem!',
        ]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->intended('');
    }
}
