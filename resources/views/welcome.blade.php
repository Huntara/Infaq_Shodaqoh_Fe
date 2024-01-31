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

    {{-- icon web --}}
    <link rel="icon website" type="icon" href="{{ asset('image/icon-web.jpg') }}">
</head>

<body>

    <!-- navbar -->
    <nav>
        <div class="container-navbar">
            <a href="#" class="navbar nav-title">Zakat <span class="span-nav-title">Wikrama</span></a>
            <div class="nav-menu" id="nav">
                <div class="link-nav">
                    <a href="#home" class="nav-item">Home</a>
                    <a href="#" class="nav-item">About us</a>
                    <a href="#" class="nav-item">Testimony</a>
                    <a href="#" class="nav-item">Contact</a>
                    <a href="#" class="btn-login">Sign in</a>
                </div>
            </div>
            <div class="hamburger">
                <input type="checkbox" name="" id="hamburger" class="input-hamburger" />
                <span class="hambuger-menu"></span>
                <span class="hambuger-menu"></span>
                <span class="hambuger-menu"></span>
            </div>
        </div>
    </nav>
    <!-- end nav -->


    {{-- hero section --}}
    <section class="hero" id="home" data-paroller-factor="0.5" data-paroller-factor-xs="0.2">
        <div class="image-parallax">
            <div class="text">Selamat datang, <span class="typing"></span></div>
            <p class="p-hero">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum sunt <br> delectus veniam sapiente
                impedit dignissimos!
            </p>
            <a href="#" class="btn-hero">Mulai berinfak</a>
        </div>
    </section>
    {{-- end hero section --}}



    {{-- section about --}}
    
    {{-- end section about --}}


    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>

    {{-- paroller js --}}
    <script src="{{ asset('js/jquery.paroller.js') }}"></script>

    {{-- my js --}}
    <script src="{{ asset('js/landing.js') }}"></script>

    {{-- cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

    {{-- text typing --}}
    <script type="text/javascript">
        var typing = new Typed('.typing', {
            strings: ["di Infaq Wikrama", "semoga amal baikmu diterima Allah", "yaa ahlil jannah"],
            typeSpeed: 100,
            backSpeed: 50,
            loop: true
        });
    </script>

    <script>
        $('.hero').paroller();
    </script>

</body>

</html>
