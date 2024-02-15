@extends('layout.layout')
@section('title', 'Dashboard')


@section('content')

<style>
    /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }
  
  /* Modal Content/Box */
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 15px;
    border: 1px solid #888;
    width: 70%; /* Could be more or less, depending on screen size */
  }
  
  /* The Close Button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
</style>
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

                
        <div>
            <!-- Trigger/Open The Modal -->
        <button id="myBtn">Open Modal</button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content" style="margin-right: 50px">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

        </div>

        <ul class="box-info">
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
                    <h5>Perjanjian Infaq</h5>
                    {{-- <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i> --}}
                </div>
                {{-- <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table> --}}
            </div>
            <div class="todo">
                <div class="head">
                    <h5>Riwayat Pembayaran</h5>
                    {{-- <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i> --}}
                </div>
                {{-- <ul class="todo-list">
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded' ></i>
                    </li> --}}
                </ul>
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