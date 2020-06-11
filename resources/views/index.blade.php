@extends('templates/main')

@section('content')
    <!-- Homepage Hero -->
    <section class="home-hero">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="hero-title">Bangun Website Professional Dalam 1 Menit</h1>
                    <p class="hero-desc">
                        Free Domain. Free Hosting. Drag drop website builder yang memudahkan anda membangun berbagai jenis website.
                    </p>
                    <a href="#" class="btn btn-orange">Coba Sekarang</a>
                </div>
            </div>
        </div>
        <div class="hero-browser">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="{{ asset('assets/auth/images/thumbnails/lamlam-web-preview.png') }}" width="959" height="345" alt="LamLam Web Profile Thumbnail" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Homepage Hero -->

    <!-- Homepage Caption -->
    <section class="home-caption box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        Lamlam adalah platform yang memudahkan anda untuk membangun website anda sendiri dalam hitungan menit tanpa
                        coding, tanpa memikirkan domain dan hosting.
                        <br>
                        Website anda launching saat itu juga.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Homepage Caption -->

    <!-- Homepage Advantages -->
    <section class="home-advantages">

        <div class="advan-top box-color-orange">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="media-body media-middle">
                            <h2 class="media-heading">Drag-drop website builder yang mudah digunakan</h2>
                            <p>
                                LamLam hadir dengan website builder yang memudahkan anda membangun berbagai jenis website. Pilih section
                                yang ingin anda tambahkan ke website, drag-drop dari berbagai variasi yang kami sediakan.
                            </p>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="{{ asset('assets/auth/images/thumbnails/homepage-browser.png') }}" width="605" height="455" alt="LamLam Web Builder Preview" class="media-object">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="advan-middle box-color-grey">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img src="{{ asset('assets/auth/images/thumbnails/homepage-browser-triple.png') }}" width="625" height="400" alt="LamLam Web Template" class="media-object">
                            </a>
                        </div>
                        <div class="media-body media-middle">
                            <h2 class="media-heading">100+ variasi template untuk berbagai kategori website</h2>
                            <p>
                                Lamlam website builder menyediakan ratusan variasi template website untuk berbagai kategori, mulai dari
                                web bisnis, edukasi, restoran, pernikahan, portfolio, kesehatan, berita dan puluhan kategori lainnya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="advan-bottom box-color-orange">
            <div class="container">
                <div class="row">
                    <div class="media">
                        <div class="media-middle media-body">
                            <h2 class="media-heading">Website yang mobile friendly di semua device</h2>
                            <p>
                                Semua website yang dibangun dengan Lamlam website builder bersifat mobile-friendly secara otomatis dan
                                tampil bagus di berbagai device, baik desktop, tablet maupun mobile.
                            </p>
                        </div>
                        <div class="media-left">
                            <a href="#">
                                <img src="{{ asset('assets/auth/images/thumbnails/homepage-web-responsive.png') }}" width="680" height="355" alt="LamLam Responsive Web Preview" class="media-object">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Homepage Advantages -->

    <!-- Homepage Features -->
    <section class="home-features">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-md-4 feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('assets/auth/images/icons/hosting.png') }}" width="52" height="52" alt="LamLam Hosting Icon" class="img-responsive">
                    </div>
                    <h3>Free Domain &amp; Hosting</h3>
                    <p>
                        Lamlam menyediakan domain dan hosting secara gratis. Gunakan website builder, pilih template, atur konten
                        dan website anda langsung launching.
                    </p>
                </div>

                <div class="col-xs-12 col-md-4 feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('assets/auth/images/icons/email.png') }}" width="49" height="50" alt="LamLam Email Icon" class="img-responsive">
                    </div>
                    <h3>Free Email Account</h3>
                    <p>
                        Lamlam menyediakan akun email gratis yang bisa digunakan menggunakan nama domain anda. Email anda tampil
                        menjadi lebih professional.
                    </p>
                </div>

                <div class="col-xs-12 col-md-4 feature-item">
                    <div class="feature-image">
                        <img src="{{ asset('assets/auth/images/icons/support.png') }}" width="37" height="57" alt="LamLam Support Icon" class="img-responsive">
                    </div>
                    <h3>24/7 Live Support</h3>
                    <p>
                        Butuh bantuan, punya pertanyaan atau keluhan terkait kinerja website anda di Lamlam? Customer support
                        kami hadir 24 jam sehari untuk membantu anda.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Homepage Features -->

    <!-- Homepage Call to Action -->
    <section class="home-cta box-grey">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Buat website anda sendiri sekarang</h2>
                    <a href="#" class="btn btn-orange">Mulai Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Homepage Call to Action -->
@endsection
