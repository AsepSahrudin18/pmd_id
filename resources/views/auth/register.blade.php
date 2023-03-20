@extends('layouts.app')

@section('content')
    <div class="container px-lg-5">

        <div class="row justify-content-center">
            <div class="d-none d-lg-block col-lg-6 mt-5">
                <img src="{{ asset('img/register-img.png') }}" alt="Register" class="img-fluid">
            </div>

            <div class="col-12 col-lg-6 px-5 ps-lg-5">
                <h1 class="fw-bold">Daftar</h1>
                <p class="w-lg-75">Daftar untuk bergabung dan ikuti event yang kamu mau.</p>
                <button class="btn bg-transparent border border-dark w-100 w-75">
                    <img src="{{ asset('img/google-logo.png') }}" alt="Google" class="me-3">
                    Daftar dengan Google
                </button>
                <div class="d-flex flex-row mt-4">
                    <hr class="w-50">
                    <small class="mt-1 px-3 text-muted">Atau</small>
                    <hr class="w-50">
                </div>

                <form class="w-lg-75 mt-2" method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="fw-bold mb-1">Nama Lengkap</label>
                        <input type="text" class="form-control border-dark @error('name') is-invalid @enderror"
                            id="name" name="name" placeholder="Masukkan Nama Lengkap" value="{{ old('name') }}"
                            required>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="fw-bold mb-1">Email</label>
                        <input type="email" class="form-control border-dark @error('email') is-invalid @enderror"
                            id="email" name="email" placeholder="nama@email.com" value="{{ old('email') }}" required>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="fw-bold mb-1">Kata Sandi</label>
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password"
                                class="form-control border-dark @error('password') is-invalid @enderror"
                                placeholder="Masukkan Kata Sandi" required>
                            <span class="input-group-text border-dark" id="showHidePassword" style="cursor: pointer">
                                <i class="fa fa-eye-slash" style="color: black" id="eyeIcon"></i>
                            </span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn text-white w-100 mt-3 py-2 fw-bold"
                        style="background: #E95C56;">Daftar</button>
                </form>
                <p class="w-lg-75 mt-3 text-center fs-6">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
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
