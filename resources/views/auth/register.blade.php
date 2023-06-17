@extends('layouts.auth')

@section('content')
<div class="wrapper">
  <!-- ========== Start Sign-Up ========== -->
  <div class="form-wrapper sign-up">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <h2>{{ __('Daftar Disini') }}</h2>
      <div class="input-group">
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
        <label for="name">{{ __('Nama') }}</label>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        <label for="email">{{ __('Email') }}</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        <label for="password">{{ __('Password') }}</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <label for="password-confirm">{{ __('Confirm Password') }}</label>
      </div>

      <button type="submit" class="btn">{{ __('Sign Up') }}</button>
      <div class="sign-link">
        <p>{{ __('Sudah mempunyai akun?') }} <a href="{{ route('login') }}" class="signIn-link">{{ __('Login') }}</a></p>
      </div>
    </form> 
  </div>
  <!-- ========== End Sign-Up ========== -->

  <!-- ========== Start Sign-in ========== -->
  <div class="form-wrapper sign-in">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <h2>{{ __('Login Disini') }}</h2>
      <div class="input-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <label for="email">{{ __('Email') }}</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="input-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <label for="password">{{ __('Password') }}</label>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      @if (Route::has('password.request'))
          <div class="forgot-pass">
            <a class="btn-link" href="{{ route('password.request') }}">{{ __('Lupa password?') }}</a>
          </div>
      @endif
      <button type="submit" class="btn">{{ __('Login') }}</button>
      <div class="sign-link">
        <p>{{ __('Belum mempunyai akun?') }} <a href="{{ route('register') }}" class="signUp-link">{{ __('Sign Up') }}</a></p>
      </div>
    </form> 
  </div>
  <!-- ========== End Sign-in ========== -->
</div>

<script>
    const wrapper = document.querySelector('.wrapper');
    const signInLink = document.querySelector('.signIn-link');
    const signUpLink = document.querySelector('.signUp-link');
        wrapper.classList.add('animate-signIn');
        wrapper.classList.remove('animate-signUp');

    signInLink.addEventListener('click', () => {
        wrapper.classList.add('animate-signUp');
        wrapper.classList.remove('animate-signIn');
    });
</script>
@endsection