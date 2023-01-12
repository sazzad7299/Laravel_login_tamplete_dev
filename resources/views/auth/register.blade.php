@extends('layouts.app')

@section('content')
    <main class="section-register">
        <section class="section-register--left">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Benefits of joining:</h1>
                    <ul class="card-text">
                        <li>Over 6,000 Proven Writers</li>
                        <li>Powerful Content Creation Tools</li>
                        <li>Easy-to-Use Platform</li>
                        <li>Fast Turnaround</li>
                        <li>Pay as You Go</li>
                        <li>Quality Guaranteed!</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section-register--right">
            <h2 class="heading mb-5">Create Your Free Account</h2>
            <p class="heading--sub mb-4 d-inline">
                High-quality content written on demand by the
                <span class="green"> web's best writers. </span>
            </p>
            <p>
                Sign up is easy and free. You don't pay anything until you're ready to
                order content.
            </p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-3">
                    <label for="" class="form-label">First Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="btn btn-blue">
                        {{ __('Sign Up') }}
                    </button>
                </div>
            </form>
            <p class="privacy-links mt-5">
                I agree to the
                <a href="terms-conditions.html"> Terms & Conditions </a>
                and
                <a href="privacy-policy.html"> Privacy Policy. </a>
            </p>
            <p class="login-link mt-5">
                Already have an account?
                <a href="login.html"> Sign in </a>
            </p>
        </section>
    </main>
@endsection
