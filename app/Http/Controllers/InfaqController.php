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

<<<<<<< HEAD
    public function dashAdm()
    {
        return view('dashAdm');
=======
    public function dashboard()
    {
        return view('Dashboard');
>>>>>>> 87638e42a4016d9398e9358bf2bdbe00600c9ab5
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

<<<<<<< HEAD
    public function dashUser() {
        return view('dashUser');
    }
=======
    public function popup() 
    {
        return view('popup');
    } 
>>>>>>> 87638e42a4016d9398e9358bf2bdbe00600c9ab5
}