<!DOCTYPE html>
<html lang="en">

<head>
    <title>Infaq | @yield ('title') </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- icon web --}}
    <link rel="icon web" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    {{-- icon bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
	<link rel="stylesheet" href="{{ asset('css/popup.css') }}">
	<script src="{{ asset('js/layout.js') }}"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <script src="{{ asset('js/layout.js') }}"></script>

    {{-- Pembayaran css --}}
    <link rel="stylesheet" href="{{ asset('css/pembayaran.css') }}">


    <title>Infaq Wikrama</title>
</head>

<body>



	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand" style="margin-left: 20px">
			<img src="{{ asset('image/icon-web.jpg') }}" width="30" alt="">
			<span class="text" style="margin-left: 15px">Infaq Wikrama</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="/dashAdmin">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="/pembayaran">
					<i class='bx bxs-credit-card' ></i>
					<span class="text">Pembayaran</span>
				</a>
			</li>
			<li>
				<a href="/riwayat">
					<i class='bx bxs-time-five' ></i>
					<span class="text">Riwayat</span>
				</a>
			</li>
			<li>
				<a href="/tagihan">
					<i class='bx bxs-book' ></i>
					<span class="text">Tagihan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				
				<a href="/logout" class="logout">

				<a href="/" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<!-- SIDEBAR -->

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand" style="margin-left: 20px">
            <img src="{{ asset('image/icon-web.jpg') }}" width="30" alt="">
            <span class="text" style="margin-left: 15px">Infaq Wikrama</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="/dashUser">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/pembayaran">
                    <i class='bx bxs-credit-card'></i>
                    <span class="text">Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="/riwayat">
                    <i class='bx bxs-time-five'></i>
                    <span class="text">Riwayat</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-book'></i>
                    <span class="text">Tagihan</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="/logout" class="logout">
                <a href="/" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
        </nav>


        @yield('content')



    </section>


    <script src="script.js"></script>

    {{-- pembayaran js --}}
    <script src="{{ asset('js/pembayaran.js') }}"></script>

    {{-- bootstrap script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
