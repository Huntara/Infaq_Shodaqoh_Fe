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

        <div class="table-data">
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
                    <h5>Perjanjian Infaq</h5>
                </div>
            </div>
        </div>

        <div class="table-data">
            <div class="todo">
                <div class="head">
                    <h5>Riwayat Pembayaran</h5>
                </div>
            </div>
        </div>

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