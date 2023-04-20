@extends('layouts.app')
@section('content')
    <!-- SECTION 1 -->
    <div class="container min-vh-82 d-flex flex-column align-items-center justify-content-center">
        <h1 class="title-text">PerempuanMasaDepan.Id</h1>
        <p class="subtitle-text text-center fs-5">Lorem ipsum dolor sit amet consectetur. Nec amet ipsum vel nunc. Et
            vulputate vitae
            sapien
            scelerisque integer.
        </p>
    </div>

    <!-- SECTION 2 -->
    <div class="container py-5 mb-5">
        <h4 class="text-center">TUJUAN</h4>
        <h2 class="text-center fw-bold mb-4">Tujuan PMD.ID</h2>
        <div class="row">
            <div class="col-6 col-lg-3 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/tujuan-1.png') }}" style="width:40px; height:40px">
                        <p class="ms-3 tujuan-title text-break">Saling Berbagi dan Menginspirasi</p>
                    </div>
                    <p class="tujuan-text">Menyediakan wadah bagi perempuan di Indonesia untuk saling berbagi dan
                        menginspirasi.
                    </p>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/tujuan-2.png') }}" style="width:40px; height:40px">
                        <p class="ms-3 tujuan-title text-break">Merangkul Seluruh Wanita di Indonesia</p>
                    </div>
                    <p class="tujuan-text">Merangkul seluruh perempuan diIndonesia demi membangun kembali
                        kepedulian sesama perempuan
                    </p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/tujuan-3.png') }}" style="width:40px; height:40px">
                        <p class="ms-3 tujuan-title text-break">Wadah untuk
                            Wanita Indonesia</p>
                    </div>
                    <p class="tujuan-text">Menjadi wadah untuk
                        perempuan tumbuh berkembang dalam menyiapkan diri
                        mencapai masa depan
                    </p>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">
                    <div class="d-flex">
                        <img src="{{ asset('assets/image/tujuan-4.png') }}" style="width:40px; height:40px">
                        <p class="ms-3 tujuan-title text-break">Membuat Wanita Lebih Berperan</p>
                    </div>
                    <p class="tujuan-text">Menjadikan perempuan lebih
                        berperan dalam berbagai bidang
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 3 -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-lg-7 mb-lg-5 d-flex justify-content-center align-items-center order-lg-2">
                <img src="{{ asset('assets/image/tentang-illustration.png') }}" alt="Tentang Kami" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 order-lg-1">
                <h4>TENTANG</h4>
                <h2 class="fw-bold lh-base">Wadah bagi perempuan - perempuan di Indonesia</h2>
                <p class="tentang-text mt-4">PMD.ID atau Perempuanmasadepan.id adalah sebuah
                    komunitas yang menyediakan wadah bagi
                    perempuan perempuan di Indonesia untuk bisa saling berbagi
                    dan menginspirasi. Perempuanmasadepan.id merupakan salah
                    satu bagian integral dari komunitas nonprofit di Indonesia
                    untuk menciptakan suatu aksi demi mencapai langkah yang
                    besar, menyadari akan hak dan kewajibannya dalam rangka
                    mengimplementasikan kepada Indonesia</p>
                <button type="button" class="btn text-white px-4 py-2 fw-bold" style="background: #E95C56;">Tentang
                    Kami</button>
            </div>
        </div>
    </div>
@endsection
