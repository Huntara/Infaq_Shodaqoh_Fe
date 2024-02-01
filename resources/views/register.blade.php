<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Wikrama | Register</title>

    {{-- icon web --}}
    <link rel="icon website" type="icon" href="{{ asset('image/icon-web.jpg') }}">

    <!-- my css -->
    <link rel="stylesheet" href="{{asset('css/register.css')}}" />

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
      <div class="col dua">
        <h1 class="title">Register</h1>
        <form action="">
          <div class="form-input">
            <label for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              required
            />
          </div>
          <div class="form-input">
            <label for="email">Username</label>
            <input
              type="text"
              name="name"
              id="name"
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
          <div class="form-input">
            <label for="password">Confirm password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              required
            />
          </div>
          <button class="btn-login">Join Us</button>
          <div class="help">
            <div class="link">
              <p>Have account? <a href="../login/login.html">Login here</a></p>
            </div>
          </div>
        </form>
        <!-- <p>&copy; Elang Atha Zahran - 2024</p> -->
      </div>
      <div class="col satu">
        <h1>Join us!</h1>
        <p>
          Lorem ipsum dolor sit amet. <br> Lorem ipsum dolor sit amet consectetur.
        </p>
      </div>
    </div>

    <script src="register.js"></script>
  </body>
</html>
