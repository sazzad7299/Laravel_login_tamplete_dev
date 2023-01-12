@extends('layouts.app')

@section('content')
    <main class="section-forgot-password">
        <section class="section-forgot-password--logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
            </a>
        </section>
        @if (session('status'))
        <section class="section-password-request--details">
            <div class="container">
              <div class="row align-items-center bg-white p-5">
                <div class="col-md-6 p-5">
                  <div class="card border-0">
                    <div class="card-title justify-content-start">
                      <h1 class="heading">Forgotten Password</h1>
                    </div>
                    <div class="card-body ps-0">
                      <p>A new password has been emailed to you.</p>
                      <p>
                        If you do not receive and email please
                        <a href="{{ route('password.request') }}"> try again </a> or contact
                        support.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="{{asset('assets/images/emailed.svg')}}" alt="" />
                </div>
              </div>
            </div>
          </section>
          @endif

        <section class="section-forgot-password--form" @if (session('status')) style="display: none" @endif>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Forgot Password</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mt-3">
                                        <label for="" class="form-label">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="my-5">
                                        <button type="submit" class="btn btn-green">
                                            {{ __('Request Password') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
