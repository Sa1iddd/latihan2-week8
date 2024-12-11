<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Fungsi untuk melakukan login
    public function login(Request $request)
    {
        $data = $request->all();  // Ambil data request
        session()->put('user', $data);  // Simpan data ke session
        return redirect('/profile')->with('success', 'Login successful!');
    }

    // Fungsi untuk menampilkan form register
    public function showRegisterForm()
    {
        return view('register');
    }

    // Fungsi untuk melakukan register
    public function register(Request $request)
    {
        $data = $request->all();  // Ambil data request
        session()->put('user', $data);  // Simpan data ke session
        return redirect('/login')->with('success', 'Registration Successful!');
    }
}
