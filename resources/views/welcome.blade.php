<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infak Wikrama | Landing Page</title>
    {{-- my css --}}
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <!-- font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet" />

    {{-- icon web --}}
    <link rel="icon website" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- navbar -->
    <nav>
        <div class="container-navbar">
            <div class="nav-title-nav">
                <img src="{{ asset('image/icon-web.jpg') }}" width="50" alt="">
                <a href="#" class="navbar nav-title">Infak <span class="span-nav-title">Wikrama</span></a>
            </div>
            <div class="nav-menu" id="nav">
                <div class="link-nav">
                    <a href="#home" class="nav-item">Home</a>
                    <a href="#about" class="nav-item">Tentang Infak</a>
                    <a href="/login" class="btn-login">Sign in</a>
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
    <section class="about" id="about">
        <div class="main">
            <div class="col parallax-about satu">
                <img src="{{ asset('image/image-about.jpg') }}" alt="image about" class="image-about">
            </div>
            <div class="col parallax-about dua">
                <h1 class="title-main">APA ITU INFAK?</h1>
                <p class="p-about">
                    Infak adalah salah satu konsep dalam Islam yang sering kali disalahartikan dengan zakat, meskipun
                    keduanya memiliki perbedaan. Infak berasal dari kata "anfaqa" dalam bahasa Arab yang berarti
                    "mengeluarkan" atau "menghabiskan harta". Secara umum, infak merujuk pada tindakan memberikan
                    sumbangan atau kontribusi secara sukarela dari harta seseorang untuk kepentingan sosial,
                    kemanusiaan, atau keagamaan tanpa adanya kewajiban syariat seperti dalam zakat.
                    <br><br>
                    Berikut adalah beberapa dalil tentang infak dalam bahasa Arab dari Al-Qur'an dan Hadis:
                    <br><br>
                    Surah Al-Baqarah (2:261):
                    <br><br>
                    يَا أَيُّهَا الَّذِينَ آمَنُوا أَنفِقُوا مِن مَّا رَزَقْنَاكُم مِّن قَبْلِ أَن يَأْتِيَ يَوْمٌ لَّا
                    بَيْعٌ فِيهِ وَلَا خُلَّةٌ وَلَا شَفَاعَةٌ ۗ وَالْكَافِرُونَ هُمُ الظَّالِمُونَ
                    Artinya:
                    <br><br>
                    "Perumpamaan orang-orang yang menafkahkan hartanya di jalan Allah adalah serupa dengan sebutir benih
                    yang menumbuhkan tujuh bulir, pada tiap-tiap bulir seratus biji. Allah melipat gandakan (ganjaran)
                    bagi siapa yang Dia kehendaki. Dan Allah Maha Luas (karunia-Nya) lagi Maha Mengetahui."
                    <br><br>
                </p>
                <a href="#" class="btn-about">Infak Sekarang</a>
            </div>
        </div>

        {{--  --}}

        <div class="main dua">
            <div class="col parallax-about-dua dua main">
                <h1 class="title-main">APA KEUNTUNGAN DARI INFAK?</h1>
                <p class="p-about">
                    Infak memiliki banyak keuntungan, baik secara spiritual maupun dunia. Berikut adalah beberapa di
                    antaranya:
                    <br><br>
                    1. <span class="title-bold">Meningkatkan Kepedulian Sosial</span>: Dengan berinfak, seseorang
                    menunjukkan kepeduliannya terhadap sesama, terutama kepada mereka yang membutuhkan. Hal ini membantu
                    memperkuat ikatan sosial dalam masyarakat dan meningkatkan solidaritas antar individu.
                    <br><br>
                    2. <span class="title-bold">Pembersihan Harta</span>: Infak membantu membersihkan harta seseorang
                    dari sifat serakah dan cinta dunia yang berlebihan. Dengan memberikan sebagian dari harta kepada
                    yang membutuhkan, seseorang belajar untuk tidak terlalu terikat pada harta benda duniawi.
                    <br><br>
                    3. <span class="title-bold">Mendekatkan Diri kepada Allah</span>: Infak merupakan salah satu bentuk
                    ibadah yang sangat dianjurkan dalam Islam. Dengan berinfak, seseorang menunjukkan ketaatan dan
                    kepatuhannya kepada Allah SWT, sehingga dapat meningkatkan kecintaan dan ketakwaannya kepada-Nya.
                </p>
                <a href="#" class="btn-about">Infak Sekarang</a>
            </div>
            <div class="col parallax-about-dua satu">
                <img src="{{ asset('image/image-about-dua.jpg') }}" alt="image about" class="image-about">
            </div>
        </div>
    </section>
    {{-- end section about --}}


    {{-- footer --}}
    <footer>
        <div class="col-footer satu">
            <div class="content">
                <img src="{{ asset('image/icon-web.jpg') }}" class="img-footer" alt="">
                <h3>INFAK WIKRAMA</h3>
                <div class="socials">
                    <button 
                        id="social-instagram" 
                        class="btn-social"
                    >
                        <i class="bi bi-instagram icon-footer"></i>
                    </button>
                    <button 
                        id="social-tiktok" 
                        class="btn-social"
                    >
                        <i class="bi bi-tiktok icon-footer"></i>
                    </button>
                    <button 
                        id="social-facebook" 
                        class="btn-social"
                    >
                        <i class="bi bi-facebook icon-footer"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-footer tiga">
            <h3>TAUTAN</h3>
            <a href="#home" class="nav-item p-footer">Home</a>
            <a href="#about" class="nav-item p-footer">Tentang Infak</a>
        </div>
        <div class="col-footer dua">
            <h3>KONTAK</h3>
            <p class="p-footer tlp"><i class="icon-footer-fill"></i>(0251) 8242411</p>
            <p class="p-footer">
                Jl. Raya Wangun, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146
            </p>
        </div>
    </footer>
    {{-- end footer --}}


    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>

    {{-- main jquery --}}
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

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