<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }
    public function register()
    {
        return view('session.register');
    }

    public function store(Request $request)
    {

        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required' 
        ]);

        if(Auth::attempt($attributes))
        {
            session()->regenerate();
            return redirect('dashboard')->with(['success'=>'You are logged in.']);
        }
        else{

            return back()->withErrors(['email'=>'Email or password invalid.']);
        }
    }
    public function registerProses(Request $request)
    {

        $new = new User();
        $new->name = $request->name;
        $new->email = $request->email;
        $new->role = 'User';
        $new->password = bcrypt($request->password);
        
        if ($new->save()) {
            return redirect()->back()->with('success','Berhasil Register!');

        }else{

            return redirect()->back()->with('failed','Gagal Register!');

        }
    }
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
