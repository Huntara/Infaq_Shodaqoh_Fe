<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            // 'user_id' => 'required|integer',
            'nama_bank' => 'required',
            'pemilik_bank' => 'required',
            'nominal' => 'required',
            'no_telpon' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max"2048',
            // 'status' => 'required|string',
            // 'done_time' => 'nullable',
        ]);

        $imageReq = $request->image;
        // dd($imageReq);
        $imageName = $imageReq->getClientOriginalName();
        $imageReq->move(public_path('bukti-pembayaran/'), $imageName);

        $pembayaran = Pembayaran::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $request->input('nama_bank'),
            'pemilik_bank' => $request->input('pemilik_bank'),
            'nominal' => $request->input('nominal'),
            'no_telpon' => $request->input('no_telpon'),
            'image' => $imageName,
            'status' => "Proses",
            // 'done_time' => $request->input('done_time'),
        ]);

        return redirect('pembayaran')->with('Success', 'Sukses Membuat Pembayaran');
    }

    public function data()
    {
        $pembayaran = Pembayaran::all();
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

        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'user_id' => $request->input('user_id'),
            'nama_bank' => $request->input('nama_bank'),
            'pemilik_bank' => $request->input('pemilik_bank'),
            'nominal' => $request->input('nominal'),
            'no_telpon' => $request->input('no_telpon'),
            'status' => $request->input('status'),
            'done_time' => $request->input('done_time'),
        ]);

        return redirect('pembayaran')->with('Success', 'Sukses Mengubah Pembayaran');
    }

    public function destroy($id)
    {
        //
        Pembayaran::where('pembayaran_id', $id)->delete();

        return redirect()->route('pembayaran')->with('Success', 'Sukses Menghapus Pembayaran');
    }
}
