@extends('layout.layout')
@section('title', 'Dashboard')


@section('content')

<div>
    <h3 style="margin-left: 20px">Selamat Datang, {{Auth::user()->name}}</h3>
    <main>
        <div class="head-title">
            <div class="left">
                <h3>Dashboard</h3>
                <ul class="breadcrumb">
                    <li>
                        <a href="/dashAdm">Dashboard</a>
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

        <ul class="box-info" style="width: 55em">
            <li>
                <i class='bx bxs-time-five' ></i>
                <span class="text">
                    <h3>Pending</h3>
                    <p>New Order</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>Request</h3>
                    <p>Visitors</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group' ></i>
                <span class="text">
                    <h3>Visitor</h3>
                    <p>{{ $users }}</p>
                </span>
            </li>
            {{-- <li>
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
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Date Order</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>
            </div>
            {{-- <div class="todo">
                <div class="head">
                    <h3>Todos</h3>
                    <i class='bx bx-plus' ></i>
                    <i class='bx bx-filter' ></i>
                </div> --}}
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
</div>

@endsection