@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- inner container --}}
        <div class="inner-container">
            {{-- right box --}}
            <div class="right-box py-5 px-5">
                <img class="img-custom" src="{{ url('img/login.png') }}" alt="">
            </div>

            {{-- left box --}}
            <div class="left-box py-5 px-5">
                <div>
                    <h1>Selamat Datang!</h1>
                    <p class="py-2">Masuk, dan pilih semua event yang kamu mau sekarang juga!</p>
                    <button class="btn bg-transparent border border-dark w-100 w-75">
                        <img src="{{ asset('img/google-logo.png') }}" alt="login-google" class="me-3">
                        Daftar dengan Google
                    </button>
                    <div class="d-flex flex-row mt-4">
                        <hr class="w-50">
                        <small class="mt-1 px-3 text-muted">Atau</small>
                        <hr class="w-50">
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email" class="text-start py-2 fw-bold">{{ __('Email') }}</label>
                        <input placeholder="example@gmail.com" id="email" type="email"
                            class="form-control border-dark py-2 @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <label for="password" class="text-start py-2 fw-bold">{{ __('Password') }}</label>
                    <div class="pt-2 input-group">

                        <input placeholder="input your password" id="password" type="password"
                            class="form-control border-dark py-2 @error('password') is-invalid @enderror" name="password"
                            required autocomplete="current-password">
                        <span class="input-group-text border-dark" id="showHidePassword" style="cursor: pointer;">
                            <i class="fa fa-eye-slash" style="color: black" id="eyeIcon"></i>
                        </span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>
                    @if (Route::has('password.request'))
                        <p class="text-end pt-2"><a class="link-pw" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a></p>
                    @endif


                    <div class="d-grid gap-2 py-1">
                        <button type="submit" class="btn-login">
                            {{ __('Masuk') }}
                        </button>
                    </div>

                    <div class="justify-content-center d-flex py-3">
                        <p>Belum Punya Akun? <a href="{{ route('register') }}">Daftar</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#showHidePassword').on('click', function() {
                var passwordField = $('#password');
                var passwordFieldType = passwordField.attr('type');
                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).html('<i class="fa fa-eye" style="color: black" id="eyeIcon"></i>');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).html('<i class="fa fa-eye-slash" style="color: black" id="eyeIcon"></i>');
                }
            });
        });
    </script>
@endpush
