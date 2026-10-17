@extends('layouts.app')

@section('title', 'Tentang Kami | Raffi Auto Care')

@section('content')

<section class="page-banner">
    <div class="container">
        <div class="section-label" style="color:#ff5555;">
            PROFIL BENGKEL
        </div>

        <h1>Tentang Raffi Auto Care</h1>

        <p>Mengenal lebih dekat bengkel dan layanan kami.</p>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="section-label">Siapa Kami?</div>

                <h2 class="section-title">
                    Perawatan Kendaraan untuk Perjalanan yang Lebih Nyaman
                </h2>

                <p class="section-description">
                    Raffi Auto Care merupakan bengkel mobil yang menyediakan
                    berbagai layanan perawatan kendaraan. Layanan kami
                    meliputi service berkala, penggantian oli, tune up,
                    dan pemeriksaan sistem pengereman.
                </p>

                <p class="section-description">
                    Melalui website ini, pelanggan dapat mengetahui
                    informasi layanan dan harga, mengenal profil bengkel,
                    serta menemukan informasi kontak yang tersedia.
                </p>

                <div class="about-feature">
                    <h5>Perawatan Kendaraan</h5>
                    <p>Mendukung kebutuhan perawatan mobil secara berkala.</p>
                </div>

                <div class="about-feature">
                    <h5>Pilihan Layanan</h5>
                    <p>Berbagai layanan untuk kebutuhan kendaraan Anda.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=1000&q=85"
                    alt="Area perawatan mobil"
                    class="about-image"
                    loading="lazy"
                    onerror="this.style.display='none';">
            </div>

        </div>
    </div>
</section>

<section class="services-section">
    <div class="container text-center">

        <div class="section-label">Raffi Auto Care</div>

        <h2 class="section-title">
            Komitmen dalam Perawatan Kendaraan
        </h2>

        <p class="section-description mx-auto" style="max-width:750px;">
            Kami menyediakan informasi layanan yang mudah diakses agar
            pelanggan dapat mengenal jenis perawatan dan kisaran harga
            sebelum menghubungi bengkel.
        </p>

        <a href="{{ route('layanan') }}" class="btn-red mt-3">
            Jelajahi Layanan
        </a>

    </div>
</section>

@endsection
