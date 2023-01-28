<?php

namespace App\Http\Controllers;

use App\Rules\UniqueUsername;
use App\Models\User;
use Illuminate\Http\Request;



class RegisterController extends Controller
{
    public function index()
    {
    
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    
    }

    public function register(Request $request)
    {
        
        $validate_data = $request->validate([
            'username' => ['required','min:3',],
            'password' => 'required|min:3|max:255',
        ]);

        $validate_data['password'] = bcrypt($validate_data['password']);
        $user= User::where('username', $request->username)->first();
        

        if($user){
            toastr()->error('Username sudah ada');
            return redirect('/register');
        }else{
            
            User::create($validate_data);
            toastr()->success('Registrasi berhasil');
            return redirect('/');
        }
       
    }
}
