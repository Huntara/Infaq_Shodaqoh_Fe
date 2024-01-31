<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zakat Wikrama | Landing Page</title>
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    
    <!-- font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet"
    />
</head>
<body>

    <!-- navbar -->
    <nav>
        <div class="container-navbar">
          <a href="#" class="navbar nav-title">Zakat <span class="span-nav-title">Wikrama</span></a>
          <div class="nav-menu" id="nav">
            <div class="link-nav">
              <a href="#" class="nav-item">Films </a>
              <a href="#" class="nav-item">Groups </a>
              <a href="#" class="nav-item">Friends </a>
            </div>
          </div>
          <div class="hamburger">
            <input
              type="checkbox"
              name=""
              id="hamburger"
              class="input-hamburger"
            />
            <span class="hambuger-menu"></span>
            <span class="hambuger-menu"></span>
            <span class="hambuger-menu"></span>
          </div>
        </div>
      </nav>
      <!-- end nav -->  
    

    <script src="{{asset('js/landing.js')}}"></script>
</body>
</html>