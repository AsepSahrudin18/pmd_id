@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <!-- SECTION 1 -->
    <x-heroComponent>
        <h1 class="title-text">PerempuanMasaDepan.Id</h1>
        <p class="subtitle-text text-center fs-5">Komunitas Peduli Pemberdayaan Perempuan Indonesia
            "Berbagi dan Menginspirasi"
        </p>
    </x-heroComponent>

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
    <x-subHeroComponent>
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
    </x-subHeroComponent>


    {{-- SECTION BERITA --}}
    {{-- <div class="container my-3">
        <h4 class="text-center">BERITA</h4>
        <h2 class="fw-bold text-center">Ketahui Update Tentang Kami</h2>

        <div class="box-berita">
            <div class="item-berita">
                <h1 class="text-light">test aja</h1>
            </div>

            <div class="item-berita">
                <h1 class="text-light">test aja</h1>
            </div>

            <div class="item-berita">
                <h1 class="text-light">test aja</h1>
            </div>

            <div class="item-berita">
                <h1 class="text-light">test aja</h1>
            </div>
        </div>
    </div> --}}




    <div class="container padding-layout">
        <h4 class="text-center">BERITA</h4>
        <h2 class="text-center fw-bold">Ketahui Update Terkini Tentang Kami</h2>


        <div class="main-container-berita">
            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-01.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-02.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-03.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-04.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-05.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-06.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-07.png') }}" alt="">
            </div>

            <div class="berita-item">
                <img style="width: 100%; height: auto; border-radius: 10px;"
                    src="{{ asset('img/news-events/event-08.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- END SECTION BERITA --}}


    {{-- SECTION MENTOR --}}
    <div class="container padding-layout">
        <h4 class="text-center">MENTOR</h4>
        <h2 class="text-center fw-bold">Dapatkan Bimbingan Langsung dari Mentor Berpengalaman</h2>

        <div class="box-scroll-horizontal">
            {{-- ITEM SCROLL --}}
            <div class="box-item-scroll">
                <div class="sub-item-mentor-1">
                    <img src="{{ asset('img/mentors/mentor_1.png') }}" alt="" class="foto-mentor">

                    <div class="text-box-mentor">
                        <div class="sub-text-mentor">
                            <span style="font-size: 10px; color: #E95C55; font-weight: bold;">Self Defelopment</span>
                            <span style="font-size: 16px; color: #000000; font-weight: bold;">Agus Budiman</span>
                            <span style="color: #828282; font-size: 10px;">Dosen di Universitas Gadjahmada</span>
                            <div class="atom-icon-mentor">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_1.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                        </div>

                        <div class="deskripsi-mentor-medium">
                            <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam
                                eget
                                ornare sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec.
                                Pellentesque aenean massa leo et. Blandit eleifend porta massa habitant a vivamus proin.
                                Ullamcorper egestas risus tempus sit convallis. Leo tristique facilisis fringilla leo.
                                Tellus feugiat amet ipsum ac. Id amet et tristique massa rhoncus nec tempor nulla. In nulla.
                            </p>
                        </div>

                        <div class="right-button">
                            <div class="atom-icon-mentor-medium">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_1.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                            <div class="tombol-mentor-medium">
                                <button class="btn-mentor-up">Profile</button>
                                <button class="btn-mentor-down">Pesan</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="deskripsi-mentor-mobile">
                    <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam eget ornare
                        sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec. Pellentesque aenean massa
                        leo et. Blandit eleifend porta massa habitant a vivamus proin. Ullamcorper egestas risus tempus sit
                        convallis. Leo tristique facilisis fringilla leo. Tellus feugiat amet ipsum ac. Id amet et tristique
                        massa rhoncus nec tempor nulla. In nulla.</p>
                </div>

                <div class="tombol-mentor">
                    <button class="btn-mentor-up">Profile</button>
                    <button class="btn-mentor-down">Pesan</button>
                </div>
            </div>
            {{-- END SCROLL --}}

            {{-- ITEM SCROLL --}}
            <div class="box-item-scroll">
                <div class="sub-item-mentor-1">
                    <img src="{{ asset('img/mentors/mentor_2.png') }}" alt="" class="foto-mentor">

                    <div class="text-box-mentor">
                        <div class="sub-text-mentor">
                            <span style="font-size: 10px; color: #E95C55; font-weight: bold;">Self Defelopment</span>
                            <span style="font-size: 16px; color: #000000; font-weight: bold;">Agus Budiman</span>
                            <span style="color: #828282; font-size: 10px;">Dosen di Universitas Gadjahmada</span>
                            <div class="atom-icon-mentor">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_2.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                        </div>

                        <div class="deskripsi-mentor-medium">
                            <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam
                                eget
                                ornare sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec.
                                Pellentesque aenean massa leo et. Blandit eleifend porta massa habitant a vivamus proin.
                                Ullamcorper egestas risus tempus sit convallis. Leo tristique facilisis fringilla leo.
                                Tellus feugiat amet ipsum ac. Id amet et tristique massa rhoncus nec tempor nulla. In nulla.
                            </p>
                        </div>

                        <div class="right-button">
                            <div class="atom-icon-mentor-medium">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_1.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                            <div class="tombol-mentor-medium">
                                <button class="btn-mentor-up">Profile</button>
                                <button class="btn-mentor-down">Pesan</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="deskripsi-mentor-mobile">
                    <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam eget ornare
                        sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec. Pellentesque aenean massa
                        leo et. Blandit eleifend porta massa habitant a vivamus proin. Ullamcorper egestas risus tempus sit
                        convallis. Leo tristique facilisis fringilla leo. Tellus feugiat amet ipsum ac. Id amet et tristique
                        massa rhoncus nec tempor nulla. In nulla.</p>
                </div>

                <div class="tombol-mentor">
                    <button class="btn-mentor-up">Profile</button>
                    <button class="btn-mentor-down">Pesan</button>
                </div>
            </div>
            {{-- END SCROLL --}}

            {{-- ITEM SCROLL --}}
            <div class="box-item-scroll">
                <div class="sub-item-mentor-1">
                    <img src="{{ asset('img/mentors/mentor_3.png') }}" alt="" class="foto-mentor">

                    <div class="text-box-mentor">
                        <div class="sub-text-mentor">
                            <span style="font-size: 10px; color: #E95C55; font-weight: bold;">Self Defelopment</span>
                            <span style="font-size: 16px; color: #000000; font-weight: bold;">Agus Budiman</span>
                            <span style="color: #828282; font-size: 10px;">Dosen di Universitas Gadjahmada</span>
                            <div class="atom-icon-mentor">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_3.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                        </div>

                        <div class="deskripsi-mentor-medium">
                            <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam
                                eget
                                ornare sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec.
                                Pellentesque aenean massa leo et. Blandit eleifend porta massa habitant a vivamus proin.
                                Ullamcorper egestas risus tempus sit convallis. Leo tristique facilisis fringilla leo.
                                Tellus feugiat amet ipsum ac. Id amet et tristique massa rhoncus nec tempor nulla. In nulla.
                            </p>
                        </div>

                        <div class="right-button">
                            <div class="atom-icon-mentor-medium">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_1.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                            <div class="tombol-mentor-medium">
                                <button class="btn-mentor-up">Profile</button>
                                <button class="btn-mentor-down">Pesan</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="deskripsi-mentor-mobile">
                    <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam eget ornare
                        sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec. Pellentesque aenean massa
                        leo et. Blandit eleifend porta massa habitant a vivamus proin. Ullamcorper egestas risus tempus sit
                        convallis. Leo tristique facilisis fringilla leo. Tellus feugiat amet ipsum ac. Id amet et tristique
                        massa rhoncus nec tempor nulla. In nulla.</p>
                </div>

                <div class="tombol-mentor">
                    <button class="btn-mentor-up">Profile</button>
                    <button class="btn-mentor-down">Pesan</button>
                </div>
            </div>
            {{-- END SCROLL --}}

            {{-- ITEM SCROLL --}}
            <div class="box-item-scroll">
                <div class="sub-item-mentor-1">
                    <img src="{{ asset('img/mentors/mentor_4.png') }}" alt="" class="foto-mentor">

                    <div class="text-box-mentor">
                        <div class="sub-text-mentor">
                            <span style="font-size: 10px; color: #E95C55; font-weight: bold;">Self Defelopment</span>
                            <span style="font-size: 16px; color: #000000; font-weight: bold;">Agus Budiman</span>
                            <span style="color: #828282; font-size: 10px;">Dosen di Universitas Gadjahmada</span>
                            <div class="atom-icon-mentor">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_4.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                        </div>

                        <div class="deskripsi-mentor-medium">
                            <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam
                                eget
                                ornare sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec.
                                Pellentesque aenean massa leo et. Blandit eleifend porta massa habitant a vivamus proin.
                                Ullamcorper egestas risus tempus sit convallis. Leo tristique facilisis fringilla leo.
                                Tellus feugiat amet ipsum ac. Id amet et tristique massa rhoncus nec tempor nulla. In nulla.
                            </p>
                        </div>

                        <div class="right-button">
                            <div class="atom-icon-mentor-medium">
                                <img style="width: 13px; heigth: auto;" src="{{ asset('img/vektors/mentor_1.png') }}"
                                    alt="">
                                <span style="font-size: 10px;">Rp40k/jam</span>
                            </div>
                            <div class="tombol-mentor-medium">
                                <button class="btn-mentor-up">Profile</button>
                                <button class="btn-mentor-down">Pesan</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="deskripsi-mentor-mobile">
                    <p style="font-size: 13px; color: #303030;">Lorem ipsum dolor sit amet consectetur. Aliquam eget ornare
                        sollicitudin tortor velit. Dictum sem a libero integer quam ultricies nec. Pellentesque aenean massa
                        leo et. Blandit eleifend porta massa habitant a vivamus proin. Ullamcorper egestas risus tempus sit
                        convallis. Leo tristique facilisis fringilla leo. Tellus feugiat amet ipsum ac. Id amet et tristique
                        massa rhoncus nec tempor nulla. In nulla.</p>
                </div>

                <div class="tombol-mentor">
                    <button class="btn-mentor-up">Profile</button>
                    <button class="btn-mentor-down">Pesan</button>
                </div>
            </div>
            {{-- END SCROLL --}}
        </div>
    </div>
    {{-- END SECTION MENTOR --}}

    {{-- SECTION EVENT --}}
    <div class="container padding-layout">
        <h4 class="text-center">EVENT</h4>
        <h2 class="text-center fw-bold mb-4 text-batas">Terhubung, Belajar, dan Tumbuh, Bergabunglah dengan Komunitas Acara
            Kami</h2>
        <div class="main-container-position">
            {{-- <div class="p-4 box-medium-event"
                style="background-color: #FDE9DE; border: #F9AE9B 1px solid !important; border-radius: 8px;">
                <img class="event-img" src="{{ asset('img/events/event-1.png') }}" alt="">

                <div class="posisi-konten">
                    <h4 class="subtitle-event">
                        Sex
                        Education dan Reproduksi Wanita</h4>

                    <p
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 16px;line-height: 28px;">
                        Hello Peeps! Kamu lagi mau cari info webinar yang membahas tentang Sex Education?! Don’t worry! We
                        got
                        your
                        back🤩
                        Pada PMD Talk kali ini kita akan membahas tentang “ No free sex! Let’s deepen sex education with us”
                        yang
                        berkolaborasi bersama DMKS (Duta Kesehatan Mental Sumut) bersama
                        ⭐️Kak Farhan Sakundirasta Putra
                        ⭐️Kak May Sarah Siregar
                        Tunggu apalagi, Segera daftarkan dirimu!</p>


                    <div class="box-item-medium">
                        <div class="atom-box">
                            <span
                                style="font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 13px; line-height: 24px; color: #303030;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>&nbsp;&nbsp;26 Maret 2023</span>
                            <span
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 300;font-size: 13px;line-height: 24px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                </svg>&nbsp;&nbsp;14.00
                                WIB</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>&nbsp;&nbsp;Zoom Meeting</span>
                        </div>
                        <button class="btn-event">Daftar</button>
                    </div>
                </div>
            </div> --}}

            <div class="p-4 box-medium-event"
                style="background-color: #FDE9DE; border: #F9AE9B 1px solid !important; border-radius: 8px;">
                <img class="event-img" src="{{ asset('img/events/event-2.png') }}" alt="">

                <div class="posisi-konten">
                    <h4 class="subtitle-event">
                        Sex
                        Education dan Reproduksi Wanita</h4>

                    <p
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 16px;line-height: 28px;">
                        Hello Peeps! Kamu lagi mau cari info webinar yang membahas tentang Sex Education?! Don’t worry! We
                        got
                        your
                        back🤩
                        Pada PMD Talk kali ini kita akan membahas tentang “ No free sex! Let’s deepen sex education with us”
                        yang
                        berkolaborasi bersama DMKS (Duta Kesehatan Mental Sumut) bersama
                        ⭐️Kak Farhan Sakundirasta Putra
                        ⭐️Kak May Sarah Siregar
                        Tunggu apalagi, Segera daftarkan dirimu!</p>


                    <div class="box-item-medium">
                        <div class="atom-box">
                            <span
                                style="font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 13px; line-height: 24px; color: #303030;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>&nbsp;&nbsp;26 Maret 2023</span>
                            <span
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 300;font-size: 13px;line-height: 24px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                </svg>&nbsp;&nbsp;14.00
                                WIB</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>&nbsp;&nbsp;Zoom Meeting</span>
                        </div>
                        <button class="btn-event">Daftar</button>
                    </div>
                </div>
            </div>

            <div class="p-4 box-medium-event"
                style="background-color: #FDE9DE; border: #F9AE9B 1px solid !important; border-radius: 8px;">
                <img class="event-img" src="{{ asset('img/events/event-3.png') }}" alt="">

                <div class="posisi-konten">
                    <h4 class="subtitle-event">
                        Sex
                        Education dan Reproduksi Wanita</h4>

                    <p
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 16px;line-height: 28px;">
                        Hello Peeps! Kamu lagi mau cari info webinar yang membahas tentang Sex Education?! Don’t worry! We
                        got
                        your
                        back🤩
                        Pada PMD Talk kali ini kita akan membahas tentang “ No free sex! Let’s deepen sex education with us”
                        yang
                        berkolaborasi bersama DMKS (Duta Kesehatan Mental Sumut) bersama
                        ⭐️Kak Farhan Sakundirasta Putra
                        ⭐️Kak May Sarah Siregar
                        Tunggu apalagi, Segera daftarkan dirimu!</p>


                    <div class="box-item-medium">
                        <div class="atom-box">
                            <span
                                style="font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 13px; line-height: 24px; color: #303030;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>&nbsp;&nbsp;26 Maret 2023</span>
                            <span
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 300;font-size: 13px;line-height: 24px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                </svg>&nbsp;&nbsp;14.00
                                WIB</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>&nbsp;&nbsp;Zoom Meeting</span>
                        </div>
                        <button class="btn-event">Daftar</button>
                    </div>
                </div>
            </div>

            <div class="p-4 box-medium-event"
                style="background-color: #FDE9DE; border: #F9AE9B 1px solid !important; border-radius: 8px;">
                <img class="event-img" src="{{ asset('img/events/event-2.png') }}" alt="">

                <div class="posisi-konten">
                    <h4 class="subtitle-event">
                        Sex
                        Education dan Reproduksi Wanita</h4>

                    <p
                        style="font-family: 'Poppins'; font-style: normal; font-weight: 400;font-size: 16px;line-height: 28px;">
                        Hello Peeps! Kamu lagi mau cari info webinar yang membahas tentang Sex Education?! Don’t worry! We
                        got
                        your
                        back🤩
                        Pada PMD Talk kali ini kita akan membahas tentang “ No free sex! Let’s deepen sex education with us”
                        yang
                        berkolaborasi bersama DMKS (Duta Kesehatan Mental Sumut) bersama
                        ⭐️Kak Farhan Sakundirasta Putra
                        ⭐️Kak May Sarah Siregar
                        Tunggu apalagi, Segera daftarkan dirimu!</p>


                    <div class="box-item-medium">
                        <div class="atom-box">
                            <span
                                style="font-family: 'Poppins';font-style: normal;font-weight: 300;font-size: 13px; line-height: 24px; color: #303030;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-calendar3" viewBox="0 0 16 16">
                                    <path
                                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                    <path
                                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>&nbsp;&nbsp;26 Maret 2023</span>
                            <span
                                style="font-family: 'Poppins'; font-style: normal;font-weight: 300;font-size: 13px;line-height: 24px;"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-clock-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                </svg>&nbsp;&nbsp;14.00
                                WIB</span>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#E95C55"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>&nbsp;&nbsp;Zoom Meeting</span>
                        </div>
                        <button class="btn-event">Daftar</button>
                    </div>
                </div>
            </div>



        </div>
        <div class="lihat-lebih-banyak-event">
            <button type="submit" class="btn-lebih-banyak-event">Lihat Lebih Banyak</button>
        </div>
    </div>
    {{-- END SECTION MENTOR --}}


    {{-- SECTION TESTIMONIAL --}}
    <div class="container padding-layout">
        <div class="row">
            <div class="col text-center">
                <h4>TESTIMONI</h4>
                <h2 class="fw-bold">Apa Kata Mereka tentang PMD</h2>
            </div>
        </div>

        {{-- SCROLL TESTIMONI --}}
        <div class="scroll-box-testimoni">
            <div class="item-testimoni">
                <h1>test</h1>
            </div>
            <div class="item-testimoni">
                <h1>test</h1>
            </div>
            <div class="item-testimoni">
                <h1>test</h1>
            </div>
            <div class="item-testimoni">
                <h1>test</h1>
            </div>
            <div class="item-testimoni">
                <h1>test</h1>
            </div>
        </div>
    </div>
    {{-- END SECTION TESTIMONIAL --}}

    {{-- Start Media Partner Section  --}}
    <div class="container media-partner padding-layout">
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
