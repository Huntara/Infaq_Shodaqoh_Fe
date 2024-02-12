<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',                
            'nama_bank' => 'required|string',
            'pemilik_bank' => 'required|string',
            'nominal' => 'required|integer',
            'no_telpon' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max"2048',
            'status' => 'required|string',
            'done_time' => 'nullable',
        ]);

        $imagePath = $request->file('image')->store('payment');

        $payment = Payment::create([
            'user_id' => $request->input('user_id'),            
            'nama_bank' => $request->input('nama_bank'),
            'pemilik_bank' => $request->input('pemilik_bank'),
            'nominal' => $request->input('nominal'),
            'no_telpon' => $request->input('no_telpon'),
            'image' => $imagePath,
            'status' => $request->input('status'),
            'done_time' => $request->input('done_time'),
        ]);

        Alert::success('Success', 'Sukses Membuat Pembayaran');

        return redirect('pembayaran')->with('Success', 'Sukses Membuat Pembayaran');

    }

    public function data()
    {
        $payment = Payment::all();
        return view('riwayat', compact('riwayat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|integer',                
            'nama_bank' => 'required|string',
            'pemilik_bank' => 'required|string',
            'nominal' => 'required|integer',
            'no_telpon' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max"2048',
            'status' => 'required|string',
            'done_time' => 'nullable',
        ]);

        $payment = Payment::findOrFail($id);

        $payment->update([
            'user_id' => $request->input('user_id'),            
            'nama_bank' => $request->input('nama_bank'),
            'pemilik_bank' => $request->input('pemilik_bank'),
            'nominal' => $request->input('nominal'),
            'no_telpon' => $request->input('no_telpon'),
            'status' => $request->input('status'),
            'done_time' => $request->input('done_time'),
        ]);

        Alert::success('Success', 'Sukses Mengubah Pembayaran');

        return redirect('pembayaran')->with('Success', 'Sukses Mengubah Pembayaran');
    }
}
