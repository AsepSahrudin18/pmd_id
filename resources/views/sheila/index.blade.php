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



    {{-- End Footer Section --}}
@endsection
