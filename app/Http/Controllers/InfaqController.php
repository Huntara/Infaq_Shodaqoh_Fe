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

    public function dashAdm()
    {
        return view('dashAdm');
    }

    public function pembayaran()
    {
        return view('pembayaran');

    }

    public function login()
    {
        return view('login');
    }

    public function forgotpassword()
    {
        return view('forgot-password');
    }

    public function dashUser() {
        return view('dashUser');
    }

}

