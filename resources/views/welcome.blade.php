<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zakat Wikrama | landing Page</title>
    {{-- my css --}}
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">

    {{-- font family --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet"
    />
</head>
<body>

    {{-- navbar --}}
    <nav>
        <div class="navbar">
            <a href="#" class="nav-title">Zakat <span class="title-nav-span">Wikrama</span></a>
            <div class="nav-links">
                <a href="#" class="nav-item">Home</a>
                <a href="#" class="nav-item">About</a>
                <a href="#" class="nav-item">Donasi</a>
                <a href="#" class="nav-item">Kontak</a>
                <a href="#" class="btn-login">Sign in</a>
            </div>
            <div class="hamburger">
                <input type="checkbox" id="hamburger">
                <span class="item-hamburger"></span>
                <span class="item-hamburger"></span>
                <span class="item-hamburger"></span>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
    

    {{-- my js --}}
    <script src="{{asset('js/landing.js')}}"></script>
</body>
</html>