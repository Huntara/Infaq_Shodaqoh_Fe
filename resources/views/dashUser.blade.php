@extends('layout.layout')
@section('title', 'Dashboard')


@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="/dashUser">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                </ul>
            </div>
            {{-- <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download' ></i>
                <span class="text">Download PDF</span>
            </a> --}}
        </div>


        <ul class="box-info" style="width: 80%">
            <li>
                {{-- <i class='bx bxs-calendar-check' ></i> --}}
                <span class="text">
                    <h3>Selamat datang, Wirda Almahera</h3>
                    {{-- <p>New Order</p> --}}
                </span>
            </li>
            {{-- <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>2834</h3>
                    <p>Visitors</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle' ></i>
                <span class="text">
                    <h3>$2543</h3>
                    <p>Total Sales</p>
                </span>
            </li> --}}
        </ul>

        <div class="row row-cols-2 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-20">
                <div class="card-body">
                  <p class="card-text">
                    <h4>الصدقة تطفئ غضب الرب وتدفع ميتة السوء</h4>
                    <p>"Sesungguhnya sedekah itu memadamkan murka Allah 
                        <br>dan menolak mati jelek (su'ul khatimah)." (HR. Thabrani)</p>
                  </p>
                </div>
                {{-- <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div> --}}
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Biaya Infaq/Shadaqah Anda</h5>
                  <h1 class="mt-5" style="margin-left: 10%">20.000/Bulan</h1>
                </div>
                {{-- <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div> --}}
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <div class="card-body">
                  <h5 class="card-title">Lihat Riwayat Pembayaran Anda</h5>
                  <a href="/riwayat" class="btn btn-primary mt-5" style="margin-left: 30%">Lihat</a>
                  {{-- <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show
                    that equal height action.
                  </p> --}}
                </div>
                {{-- <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div> --}}
              </div>
            </div>
          </div>

        {{-- <div class="table-data">
            <div class="order">
                <div class="head">
                    <span class="text">
                        <h4>الصدقة تطفئ غضب الرب وتدفع ميتة السوء</h4>
                        <p>"Sesungguhnya sedekah itu memadamkan murka Allah 
                            <br>dan menolak mati jelek (su'ul khatimah)." (HR. Thabrani)</p>
                    </span>
                </div>
            </div>
            <div class="todo">
                <div class="head">
                    <h5>Biaya Infaq/Shadaqah Anda</h5>
                </div>
            </div>
            <div class="todo">
                <div class="head">
                    <h5>Lihat Riwayat Pembayaran Anda</h5>
                </div>
            </div>
        </div> --}}

        {{-- <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div> --}}

        {{-- <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h5>Lihat Riwayat Pembayaran</h5>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-12 col-lg-4 mb-8 mb-lg-0">
              <div class="mw-md mx-auto py-12 px-8 bg-white rounded-4 text-center shadow-lg">
                <div class="d-flex mb-6 mx-auto align-items-center justify-content-center bg-primary rounded-pill" style="width: 70px; height: 70px;">
                  <svg width="26" height="21" viewbox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 5.16663L11.5208 12.1805C12.4165 12.7776 13.5835 12.7776 14.4792 12.1805L25 5.16663M3.66667 19.8333H22.3333C23.8061 19.8333 25 18.6394 25 17.1666V3.83329C25 2.36053 23.8061 1.16663 22.3333 1.16663H3.66667C2.19391 1.16663 1 2.36053 1 3.83329V17.1666C1 18.6394 2.19391 19.8333 3.66667 19.8333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <h6 class="fs-6">Send Email</h6>
                <span class="d-block">info@mail.com</span>
                <span>support@mail.com</span>
              </div>
            </div> --}}

            <script>
                // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on the button, open the modal
                    btn.onclick = function() {
                    modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                    modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    }
            </script>
</div>

@endsection