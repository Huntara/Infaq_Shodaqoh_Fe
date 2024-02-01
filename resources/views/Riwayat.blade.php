@extends('layout.layout')
@section('title', 'Riwayat')


@section('content')

<div class="card mt-3">
    <h5 class="card-header text-light" style="background-color: #3421C0" >Riwayat Pembayaran</h5>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nominal Infaq</th>
                    <th>tanggal Pembayaran</th>
                    <th>Bulan</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                    
                <tr>
                    <td>1</td>
                    <td>Aliyah</td>
                    <td>20.000</td>
                    <td>19/02/02</td>
                    <td>September</td>
                    <td>Terima</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
