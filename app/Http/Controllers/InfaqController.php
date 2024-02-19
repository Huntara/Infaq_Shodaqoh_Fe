<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $users = User::where('role_id', '2')->count();
        return view('dashAdm', compact('users'));
    }


    public function pembayaran()
    {
        return view('pembayaran');
    }


    public function forgotpassword()
    {
        return view('forgot-password');
    }

    public function perjanjian()
    {
        return view('perjanjian_nominal_form');
    }

    public function nominal_form(Request $request)
    {
        try {
            // Validasi data input
            $request->validate([
                'nominal' => 'required|numeric',
            ]);

            // Lakukan penambahan data ke dalam tabel menggunakan metode create
            $payment = Pembayaran::create([
                'nominal' => $request->nominal, // Ambil nilai nominal dari permintaan
                'user_id' => Auth::id(), // Ambil ID pengguna yang sedang login
            ]);

            // Jika berhasil, kembalikan respons JSON
            return response()->json(['success' => true, 'payment' => $payment]);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan respons JSON dengan pesan kesalahan
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    public function dashUser()
    {
        return view('dashUser');
    }
}
