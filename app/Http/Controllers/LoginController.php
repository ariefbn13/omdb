<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        // session()->flush();
        
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            // toastr()->success('Login Sukses');
            // session()->save();
            return redirect('/home');
        }

        toastr()->error('Login Gagal');
        return back()->with('loginError', 'Login Failed!');   
    }
    public function logout(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');

    }


}
