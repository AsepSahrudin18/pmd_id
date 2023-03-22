@extends('layouts.app')
@section('content')
    {{-- Start Media Partner Section  --}}

    <div class="container media-partner">

        <div class="row">
            <div class="col text-center">
                <h4>OUR PARTNER</h4>
                <h2 class="fw-bold">Mereka yang sudah bekerja sama dengan kami</h2>
            </div>
        </div>

        <div class="row d-flex align-items-center overflow-hidden">
            <div class="row row-cols-2">
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-1.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-2.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-3.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-4.png') }}" alt="">
                </div>
            </div>

            <div class="row row-cols-2">
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-5.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-6.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-7.png') }}" alt="">
                </div>
                <div class="col-md-3">
                    <img src="{{ url('assets/image/media-partner-8.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>

    {{-- End Media Partner Section --}}

    {{-- Start Footer Section --}}

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-12 d-flex img-position">
                    <img class="img-footer" src="{{ url('assets/image/logo.png') }}" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <div class="row ">
                        {{-- box 1 --}}
                        <div class="col-sm-4 col-12 pt-2">
                            <div>
                                <p><a class="link-footer" href="#">Home</a></p>
                                <p><a class="link-footer" href="#">About us</a></p>
                                <p><a class="link-footer" href="#">Product</a></p>
                                <p><a class="link-footer" href="#">News</a></p>
                            </div>
                        </div>
                        {{-- box 2 --}}
                        <div class="col-sm-4 col-12 pt-2">
                            <div>
                                <p><a class="link-footer" href="#">Partnership</a></p>
                                <p><a class="link-footer" href="#">Contact</a></p>
                                <p><a class="link-footer" href="#">Career</a></p>
                                <p><a class="link-footer" href="#">Event</a></p>
                            </div>
                        </div>
                        {{-- box 3 --}}
                        <div class="col-sm-4 col-12 mt-0">
                            <div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('assets/image/instagram-logo.png') }}" alt="" class="me-2">
                                    <p class="mt-2"><a class="link-footer" href="">@pmd.id</a></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('assets/image/tiktok-logo.png') }}" alt="" class="me-2">
                                    <p class="mt-2"><a class="link-footer" href="">@pmd.id</a></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('assets/image/youtube-logo.png') }}" alt="" class="me-2">
                                    <p class="mt-2"><a class="link-footer" href="">PMD.ID</a></p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ url('assets/image/discord-logo.png') }}" alt="" class="me-2">
                                    <p class="mt-2"><a class="link-footer" href="">pmd.id</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- End Footer Section --}}
@endsection
