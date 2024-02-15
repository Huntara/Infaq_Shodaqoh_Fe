@extends('layout.layout')

@section('title', 'Pembayaran')

@section('content')

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
                    {{-- <div class="checkbox">
                        <label class="contain">
                            <input type="checkbox">
                            <svg 
                                viewBox="0 0 64 64" 
                                height="2em" 
                                width="2em"
                            >
                                <path 
                                    d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" 
                                    pathLength="575.0541381835938" 
                                    class="path"
                                ></path>
                            </svg>
                        </label>
                        <p class="ps-5 pr">Infak Sebagai Hamba Allah</p>
                    </div> --}}
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
=======
    <body style="background-color: #eeeeee;">

        <div class="card-pembayaran p-3 me-5 shadow d-flex justify-content-center flex-column rounded-3 overflow-hidden"
            style="background-color: #ffffff">
            <h6 class="title-card fs-4 fw-semibold text-center mb-5">Pembayaran</h6>
            <div class="main-content px-5">
                <form action="" class="my-3">
                    <h5 class="title-content">Tunaikan Infak Disini</h5>
                    <div class="my-4 form-input">
                        <input type="text" class="form-control px-5 shadow py-3 border"
                            placeholder="Isi Nominal Donasi (minimal 10.000)" required oninput="validateAndFormat(this)">
                        <label for="nominal" class="fw-bold label">
                            Rp
                        </label>
                    </div>
                    <div class="mb-4 form-input">
                        <select class="form-select px-5 shadow py-3" aria-label="Default select example" id="payment-method"
                            required>
                            <option value="1">BCA</option>
                            <option value="2">Mandiri</option>
                            <option value="3">Syariah</option>
                            <option value="4">BNI</option>
                        </select>
                        <label for="nominal" class="fw-bold label">
                            <i class="bi bi-wallet fw-bold"></i>
                        </label>
                    </div>
>>>>>>> 87638e42a4016d9398e9358bf2bdbe00600c9ab5


                    <h5 class="title-content mt-5">Lengkapi Data Penginfak</h5>
                    <div class="form-input mb-3 data mt-4">
                        <label for="" class="fs-5">Pemilik Bank</label>
                        <input type="text" class="form-control shadow py-3 border nama-donatur"
                            placeholder="Masukan Nama Donatur" required>
                    </div>
                    <div class="no-hp my-3">
                        <input type="number" class="form-control shadow py-3 border" placeholder="Masukan Nomer telpon Anda"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="formFileLg" class="form-label">Input Bukti Pembayaran</label>
                        <input class="form-control form-control-lg border" id="formFileLg" type="file">
                    </div>

                    <div class="d-flex justify-content-end align-items-center pt-5">
                        <button type="submit" class="btn btn-secondary ml-auto px-5 py-2">Submit</button>
                    </div>
                </form>
            </div>
    </body>



@endsection
