@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <x-heroComponent>
        <h1 class="title-text">Tentang Kami</h1>
        <p class="subtitle-text text-center fs-5">Komunitas Peduli Pemberdayaan Perempuan Indonesia
            "Berbagi dan Menginspirasi"
        </p>
    </x-heroComponent>

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


    <div class="container padding-layout">
        <div class="sub-container-visi-misi">
            <div class="right-visi-misi">
                <div class="right-child-visi-misi">
                    <span class="text-box-visi-misi">
                        <span class="no-visi-misi">01</span>
                        <h1 class="title-visi-misi">Visi</h1>
                    </span>

                    <div class="visi-description">
                        <p>Membentuk lingkaran kekuatan bagi
                            perempuan di seluruh Indonesia untuk
                            saling peduli tumbuh dan berkembang
                            serta sebagai komunitas yang bertaqwa
                            kepada Tuhan Yang Maha Esa.</p>
                    </div>
                </div>
            </div>
            <div class="left-visi-misi">
                <div class="left-child-visi-misi">
                    <span class="text-box-visi-misi">
                        <span class="no-visi-misi">02</span>
                        <h1 class="title-visi-misi">Misi</h1>
                    </span>

                    <div class="misi-description">
                        <ul>
                            <li>Misi Mendedikasi Perempuan Indonesia agar Lebih Berperan dalam berbagai bidang</li>
                            <li>Memberikan wadah bagi perempuan Indonesia untuk tumbuh dan berkembang dalam menyiapkan diri
                                di masa depan</li>
                            <li>Menciptakan jaringan komunikasi dan informasi serta menjalin relasi dan kolaborasi dengan
                                berbagai komunitas sejenis</li>
                            <li>
                                Menggalang persatuan dan kesatuan perempuan dalam pembangunan di segala aspek kehidupan.
                            </li>
                            <li>Meningkatkan kepedulian terhadap perempuan. Membantu perempuan Indonesia untuk menjadi diri
                                sendiri.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container padding-layout">
        <h4 class="title-section">PIMPINAN</h4>
        <h2 class="description-section">Temui Pimpinan Kami</h2>

        <div class="container-pimpinan">
            <div class="box-item-pimpinan">
                <img class="img-leader" src="{{ asset('img/leaders/leader_1.png') }}" alt="">

                <div class="text-box-pimpinan">
                    <span class="title-item-leader">LEADER</span>
                    <P class="description-name-leader">Aulina Riezqi Sa’baniayanti</P>
                </div>
            </div>

            <div class="box-item-pimpinan">
                <img class="img-leader" src="{{ asset('img/leaders/leader_2.png') }}" alt="">

                <div class="text-box-pimpinan">
                    <span class="title-item-leader">LEADER</span>
                    <P class="description-name-leader">Aulina Riezqi Sa’baniayanti</P>
                </div>
            </div>

            <div class="box-item-pimpinan">
                <img class="img-leader" src="{{ asset('img/leaders/leader_3.png') }}" alt="">

                <div class="text-box-pimpinan">
                    <span class="title-item-leader">LEADER</span>
                    <P class="description-name-leader">Aulina Riezqi Sa’baniayanti</P>
                </div>
            </div>

            <div class="box-item-pimpinan">
                <img class="img-leader" src="{{ asset('img/leaders/leader_4.png') }}" alt="">

                <div class="text-box-pimpinan">
                    <span class="title-item-leader">LEADER</span>
                    <P class="description-name-leader">Aulina Riezqi Sa’baniayanti</P>
                </div>
            </div>

            <div class="box-item-pimpinan">
                <img class="img-leader" src="{{ asset('img/leaders/leader_5.png') }}" alt="">

                <div class="text-box-pimpinan">
                    <span class="title-item-leader">LEADER</span>
                    <P class="description-name-leader">Aulina Riezqi Sa’baniayanti</P>
                </div>
            </div>
        </div>
    </div>
@endsection
