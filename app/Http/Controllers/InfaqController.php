<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfaqController extends Controller
{
    public function riwayat()
    {
        return view('Riwayat');
    }

    public function tagihan()
    {
        return view('Tagihan');
    }

    public function dashboard()
    {
        return view('Dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function forgotpassword()
    {
        return view('forgot-password');
    }

    public function pembayaran() {
        return view('pembayaran');
    }

    public function popup() 
    {
        return view('popup');
    } 
}