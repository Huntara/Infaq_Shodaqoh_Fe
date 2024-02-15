@extends('layout.layout')
@section('title', 'Riwayat')


@section('content')

<div>
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Tagihan</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Tagihan</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
                    <h3>1020</h3>
                    <p>New Order</p>
                </span>
            </li>
            <li>
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
            </li>
        </ul> --}}


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Tagihan</h3>
                    <i class='bx bx-search' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Bulan</th>
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
