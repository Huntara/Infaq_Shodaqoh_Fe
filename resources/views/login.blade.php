<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Infak Wikrama | Login</title>

    {{-- icon web --}}
    <link rel="icon website" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    <!-- my css -->
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />

    <!-- font family -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;1,100;1,200;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- icon awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
    />
  </head>

  <body>
    <div class="container">
      <div class="col satu">
        <h1>Welcome Back!</h1>
        <p>
          Selamat datang kembali user! <br />
          Login kembali untuk berjumpa kembali dengan <br />
          sesama cinephile!
        </p>
      </div>
      <div class="col dua">
        <h1 class="title">Login</h1>
        <form action="">
          <div class="form-input">
            <label for="email">Enter your email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              required
            />
          </div>
          <div class="form-input">
            <label for="password">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              required
            />
          </div>
          <button class="btn-login">Login</button>
          <div class="help">
            <div class="link">
              <p>Doesn't have account? <a href="../register/register.html">Register here</a></p>
              <a href="#">Forgot your password?</a>
            </div>
          </div>
        </form>
      </div>
    </div>

    <script src="login.js"></script>
  </body>
</html>
