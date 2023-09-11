<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{URL ('/Images/tab-icon.png') }}"/>


    @vite(['resources/css/signup.css'])
  </head>
  <body>
    <div class="register-container">
      <div class="register-card">
        <form method="POST" action="{{ route('register') }}">
          @csrf

          <img src="images/tab-icon.png" alt="" class="img" />
          <h1>Registration</h1>
          <div class="name">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label for="name">Name</label>
            <div class="name-warning">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
              @enderror</div>
          </div>

          <div class="email">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <label for="email">Email</label>
            <div class="email-warning">

              @error('email')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
               @enderror

            </div>
          </div>

          <div class="pass">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label for="pass">create password</label>
            <div class="pass-warning">

              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>

          <div class="confirm">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <label for="con">confirm password</label>
          </div>
          <div class="reg-button">
            <button type="submit" class="btn btn-primary">
              {{ __('Register') }}
            </button>

            <a class="btn btn-link" id="haveanacc" href="{{ route('login') }}">
                    {{ __('Already have an account? sign in ') }}
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
