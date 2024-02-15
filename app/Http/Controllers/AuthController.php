<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function store(Request $request) {
        // validasi
        
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials)) {

            // buat ulang session login
            $request->session()->regenerate();

            // Cek apakah perjanjian nominal infak telah diisi
            $user = auth()->user();
            $infakNominal = $user->Pembayaran->nominal ?? null;
            if ($infakNominal === null) {
                // Jika belum diisi, tampilkan pop-up untuk mengisi
                return redirect()->intended('/perjanjian');
            }
            // Redirect ke dashboard jika perjanjian nominal infak sudah diisi

            if (auth()->user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('dashAdm');
            } else {
                // jika user 
                return redirect()->intended('dashUser');
            }
        }

        // jika email atau password salah
        // kirimkan session error
        return back()->with('error', 'name atau password salah');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

}
