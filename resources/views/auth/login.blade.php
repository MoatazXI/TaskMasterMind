<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>



    @vite(['resources/css/login.css'])
  </head>
  <body>

    <div class="login-container">
      <div class="card">
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <img src="{{ URL('/Images/tab-icon.png') }}" alt="" class="img" >
          <h1>Welcome</h1>
          <div class="email-input">
            <div class="email-warning"> <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

             <label for="email">Email</label>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>The Email or Password is not correct</strong>
                  </span>
              @enderror</div>
          </div>
          <div class="password-input">


            <div class="pass-warning">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              <label for="pass">{{ __('Password') }}</label>

            </div>

          </div>
          <button class="btn2" type="submit" >{{ __('Login') }}</button>

          <span class="txt"
            >don't have an account? <a href="{{ route('register') }}">sign up</a></span
          >
        </form>
      </div>
    </div>
  </body>
</html>
