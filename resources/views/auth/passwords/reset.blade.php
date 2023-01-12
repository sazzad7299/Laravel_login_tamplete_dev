

@extends('layouts.app')

@section('content')
<main class="section-login">
    <section class="section-login--logo">
      <a href="index.html">
        <img src="{{asset('assets/images/logo.png')}}" alt="logo" class="img-fluid" />
      </a>
    </section>

    <section class="section-login--form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
              <div class="card-title">Reset Your Password</div>
              <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="mt-3">
                        <label for="" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                      </div>
                    <div class="mt-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>


                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="mt-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="links">
                  <p>
                    <a href="{{ route('register') }}">Need an account?</a>
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}</a>
                    @endif
                  </p>
                </div>
                <div class="back-button">
                  <a href="index.html">
                    <i class="bi bi-arrow-left-circle"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection
