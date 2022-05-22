<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/register', [
            'active' => '',
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Registration page form validation
        $validated = $request->validate([
            'email' => 'required|email:dns|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        // Password encyption with bcrypt
        $validated['password'] = bcrypt($validated['password']);

        // Input userdata to database
        User::create([
            'email' => $validated['email'],
            'name' => $validated['name'],
            'password' => $validated['password'],
            'is_admin' => false,
        ]);

        // Redirect to login page with session data
        $request->session()->flash('login-message', '<div class="alert alert-success" role="alert">Registrasi berhasil, silakan login.</div>');
        return redirect('auth/login');
    }
}
