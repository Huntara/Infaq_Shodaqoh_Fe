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

    public function payment()
    {
        return view('Payment');
    }

    public function dashboard()
    {
        return view('Dashboard');
    }

    public function forgotpassword()
    {
        return view('forgot-password');
    }

    public function pembayaran() {
        return view('pembayaran');
    }

    public function perjanjian() {
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
            $payment = Payment::create([
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

}