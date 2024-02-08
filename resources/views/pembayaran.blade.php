<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran | Page</title>

    {{-- icon web --}}
    <link rel="icon web" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    {{-- pembayaran css --}}
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">

    {{-- bootstrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- link icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #e9e9e9;">

    <div class="card-pembayaran bg-light-subtle p-3 shadow d-flex justify-content-center flex-column rounded-3">
        <h6 class="title-card fs-4 fw-semibold text-center mb-5">Pembayaran</h6>
        <div class="main-content px-5">
            <form action="" class="my-3">
                <h5 class="title-content">Tunaikan Infak Disini</h5>
                <div class="my-4 form-input">
                    <input 
                        type="number" 
                        class="form-control px-5 shadow py-3"
                        placeholder="Isi Nominal Donasi"
                        required
                        min="10000"
                    >
                    <label 
                        for="nominal" 
                        class="fw-bold"
                    >
                        Rp
                    </label>
                </div>
                <div class="mb-4 form-input">
                    <select 
                        class="form-select px-5 shadow py-3" 
                        aria-label="Default select example" 
                        id="payment-method"
                        required
                    >
                        <option selected disabled hidden>Pilih Metode Pembayaran</option>
                        <option value="1" data-icon>Dana</option>
                        <option value="2">Gopay</option>
                        <option value="3">Qris</option>
                        <option value="4">Shopee Pay</option>
                        <option value="5">Ovo</option>
                        <option value="6">Visa</option>
                    </select>
                    <label 
                        for="nominal" 
                        class="fw-bold"
                    >
                        <i class="bi bi-wallet fw-bold"></i>
                    </label>
                </div>


                <h5 class="title-content mt-3">Lengkapi Data Penginfak</h5>
                <div class="content d-flex align-items-center gap-3 flex-wrap mb-3">
                    <div class="form-input data">
                        <input 
                            type="text" 
                            class="form-control shadow py-3 nama-donatur" 
                            placeholder="Masukan Nama Donatur"
                            required
                        >
                    </div>
                    <div class="checkbox">
                        <div class="checkbox-wrapper">
                            <label>
                              <input type="checkbox">
                              <span class="checkbox"></span>
                            </label>
                        </div>
                        <p class="ps-5 pr">Infak Sebagai Hamba Allah</p>
                    </div>
                </div>
                <div class="no-hp mb-3">
                    <input 
                        type="number" 
                        class="form-control shadow py-3"
                        placeholder="Masukan Nomer telpon Anda"
                        required
                    >
                </div>
                <div class="doa">
                    <input 
                        type="text" 
                        class="form-control shadow py-3"    
                        placeholder="Doa (Opsional)"
                    >
                </div>
                <div class="d-flex justify-content-end align-items-center pt-5">
                    <button type="submit" class="btn btn-secondary ml-auto px-5 py-2">Submit</button>
                </div>
            </form>
        </div>

    {{-- pembayaran js --}}
    <script src="{{asset('js/pembayaran.js')}}"></script>

    {{-- bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
