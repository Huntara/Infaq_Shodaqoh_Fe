<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Infaq | @yield ('title') </title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>

<div class="wrapper">

	<div class="top_navbar">
		<div class="logo">
			<a href="#">Infaq Wikrama</a>
		</div>
		<div class="top_menu">
			<div class="home_link">
				<a href="#">
					<span class="icon"><i class="fas fa-home"></i></span>
					<span>Home</span>
				</a>
			</div>
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						<i class="fas fa-bell"></i>
					</div>
				</div>
				<div class="icon_wrap">
					<div class="icon">
						<i class="fas fa-cog"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="#">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Dashboard</span>
		            </a>
		          </li>
		          <li>
		            <a href="/payment" @if (request()->route()->uri == 'payment') class='active' @endif>
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Pembayaran</span>
		            </a>
		          </li>
		          <li>
		            <a href="/tagihan" @if (request()->route()->uri == 'tagihan') class='active' @endif>
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Tagihan</span>
		            </a>
		          </li>
		          <li>
		            <a href="/riwayat" @if (request()->route()->uri == 'riwayat') class='active' @endif>
		              <span class="icon"><i class="fas fa-address-card"></i></span>
		              <span class="list">Riwayat</span>
		            </a>
		          </li>
		          <li>
		            <a href="#">
		              <span class="icon"><i class="fab fa-blogger"></i></span>
		              <span class="list">Logout</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>

	        </div>
	    </div>

	    <div class="container">
	    	<div class="item_wrap">
                @yield('content')
	    	</div>
	    </div>
	</div>
</div>
	

</body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".hamburger").click(function(){
          $(".wrapper").toggleClass("active")
        })
    });
</script>
</html>