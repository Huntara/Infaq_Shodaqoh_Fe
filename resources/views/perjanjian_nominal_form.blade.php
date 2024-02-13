@extends('layouts.main')

@section('title', 'perjanjian')

@section('content')
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // URL untuk mendapatkan IP address pengguna
    const ipAPI = "//api.ipify.org?format=json";

    // Fungsi untuk mengambil IP address pengguna
    async function fetchIPAddress() {
        const response = await fetch(ipAPI);
        const data = await response.json();
        return data.ip;
    }

    // Fungsi untuk menampilkan popup dengan IP address
    async function showIPAddressPopup() {
        try {
            // Mendapatkan IP address pengguna
            const inputValue = await fetchIPAddress();

            // Menampilkan popup dengan input untuk perjanjian infak
            const { value: nominal } = await Swal.fire({
                title: "Perjanjian Infak",
                input: "text",
                inputLabel: "Nominal yang anda masukan saat ini berlaku untuk setiap kali anda akan melakukan pembayaran kedepannya, jika anda ingin melakukan perubahan nominal infak, anda dapat meminta admin untuk melakukan persetujuan.",
                inputValue,
                showCancelButton: true,
                inputValidator: (value) => {
                    if (!value) {
                        return "You need to write something!";
                    }
                }
            });

            // Menampilkan pesan dengan IP address jika berhasil
            if (nominal) {
                // Kirim nilai nominal ke server menggunakan AJAX
                sendNominalToServer(nominal);
            }
        } catch (error) {
            // Menangani kesalahan jika terjadi
            console.error("Error fetching IP address:", error);
        }
    }

    // Fungsi untuk mengirim nilai nominal ke server menggunakan AJAX
    async function sendNominalToServer(nominal) {
        try {
            // Kirim permintaan POST ke URL endpoint yang ditentukan
            const response = await fetch('/perjanjian', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ nominal: nominal })
            });

            // Handle respon dari server jika diperlukan
            if (response.ok) {
                const responseData = await response.json();
                console.log('Response from server:', responseData);
                Swal.fire('Success', 'Nominal infak berhasil disimpan!', 'success');
            } else {
                Swal.fire('Error', 'Gagal menyimpan nominal infak!', 'error');
            }
        } catch (error) {
            console.error("Error sending nominal to server:", error);
            Swal.fire('Error', 'Terjadi kesalahan saat mengirim nominal ke server!', 'error');
        }
    }

    // Memanggil fungsi untuk menampilkan popup saat halaman dimuat
    window.onload = function() {
        showIPAddressPopup();
    };
</script>

@endsection