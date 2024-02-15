<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infak Wikrama | Login</title>

    {{-- icon web --}}
    <link rel="icon website" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    <!-- my css -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />

    <!-- font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,100;1,200;1,300;1,400;1,700&display=swap"
        rel="stylesheet" />

    <!-- icon awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" />
</head>

<body>
    <div class="container">
        <div class="col satu">
            <h1 class="title">login</h1>
            <form action="login" method="POST">
                @csrf
                <div class="form-input">
                    <label for="name">Nama</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        required
                        placeholder="masukan nama terdaftar"  
                        name="name"  
                    >
                    <span class="alert">nama tidak boleh kosong!</span>
                </div>
                <div class="form-input pw">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        class="form-control" 
                        required
                        placeholder="masukan password terdaftar"
                        name="password"
                    >
                    <span class="alert">password tidak boleh kosong!</span>
                </div>
                {{-- <div class="show-pw">
                    <input type="checkbox" class="form-check-label">
                    <label for="show" class="show">Lihat password</label>
                </div> --}}
                <button type="submit" class="btn-submit">Login</button>
            </form>
        </div>
        <div class="col dua"></div>
    </div>

    <script src="{{asset('js/login.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('error'))
    <script>
        Swal.fire({
        icon: "error",
        title: "Oops",
        text: "{{$message}}",
        });
    </script>
    @endif
</body>

</html>
