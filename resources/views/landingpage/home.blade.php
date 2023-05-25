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
            <div class="col-12 col-lg-5 order-lg-1 mt-5">
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


    <div class="container mb-3 mt-5">
        <div class="col mb-4 text-center">
            <h4>BERITA</h4>
            <h2 class="fw-bold">Ketahui Update Terkini Tentang Kami</h2>
        </div>
    </div>
    <div class="container">

        {{-- inner container --}}
        <div class="inner-container">

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

            {{-- card --}}
            <div class="card card-size">
                <div class="card-body">
                    <img class="events" src="{{ url('img/news-events/event-01.png') }}" alt="event-image">
                </div>
            </div>
            {{-- end card --}}

        </div>
        {{-- end inner container --}}
    </div>

    <div class="container mb-3 mt-5">
        <div class="col mb-4 text-center">
            <h4>Mentor</h4>
            <h2 class="fw-bold">Dapatkan Bimbingan Langsung dari Mentor Berpengalaman</h2>
        </div>
    </div>

    <div class="container">
        <div class="row-xl-12">
            <div class="col col-xl-12 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">

                    <div class="box-circle">
                        <div class="sub-container-up">
                            <img class="image-mentor" src="{{ url('assets/image/img-mentor-1.png') }}" alt="">
                            <div class="box-left-up">
                                <span style="color: #E95C55;">Self Development</span>
                                <span style="font-size: 16px;">Agus Budiman </span>
                                <span style="color: #828282;">Dosen di Universitas Gadjahmada</span>
                            </div>
                        </div>

                        <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quibusdam in quam
                            iure. Minus ratione
                            nam nostrum illo illum! Molestiae consectetur ratione atque nisi hic nesciunt ea. Quibusdam,
                            aliquam
                            quasi!</p>
                    </div>
                </div>
            </div>

            <div class="col col-xl-12 mb-4">
                <div class="border rounded p-2 p-sm-4 h-100"
                    style="background-color: #FDE9DE; border-color:#F9AE9B !important;">

                    <div class="sub-container-up">
                        <img class="image-mentor" src="{{ url('assets/image/img-mentor-1.png') }}" alt="">
                        <div class="box-left-up">
                            <span style="color: #E95C55;">Self Development</span>
                            <span style="font-size: 16px;">Agus Budiman </span>
                            <span style="color: #828282;">Dosen di Universitas Gadjahmada</span>
                        </div>
                    </div>

                    <p class="mt-3 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quibusdam in quam
                        iure. Minus ratione
                        nam nostrum illo illum! Molestiae consectetur ratione atque nisi hic nesciunt ea. Quibusdam, aliquam
                        quasi!</p>


                    <button style="color: #E95C55;" class="btn-mentor-custom bg-btn-custom-1">Profile</button>
                    <button style="color: #FFFFFF;" class="btn-mentor-custom bg-btn-custom-2 mt-2">Booking</button>
                </div>
            </div>
        </div>
    </div>


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
@endsection
