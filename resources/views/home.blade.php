@extends('layouts.app')

@section('title', 'Beranda | Raffi Auto Care')

@section('content')

<!-- HERO BERANDA -->
<section class="hero" id="home">
    <div class="container">
        <div class="hero-content">
            <div class="hero-label">BENGKEL MOBIL PROFESIONAL</div>

            <h1>
                Rawat Mobilmu,<br>
                Jaga Performa Terbaiknya.
            </h1>

            <p>
                Raffi Auto Care hadir untuk membantu menjaga kondisi
                kendaraan Anda melalui layanan perawatan dan pemeriksaan
                mobil yang praktis dan terpercaya.
            </p>

            <a href="{{ route('layanan') }}" class="btn-red">
                Lihat Layanan
            </a>

            <a href="{{ route('kontak') }}" class="btn-outline">
                Hubungi Kami
            </a>
        </div>
    </div>
</section>

<!-- INFORMASI SINGKAT -->
<div class="info-strip">
    <div class="container">
        <div class="row">
            <div class="col-md-4 info-item">
                <h5>Perawatan Kendaraan</h5>
                <p>Membantu menjaga kondisi mobil</p>
            </div>

            <div class="col-md-4 info-item">
                <h5>Beragam Layanan</h5>
                <p>Pilihan layanan sesuai kebutuhan</p>
            </div>

            <div class="col-md-4 info-item">
                <h5>Jam Operasional</h5>
                <p>Setiap hari, pukul 09.00–18.00 WIB</p>
            </div>
        </div>
    </div>
</div>

<!-- TENTANG SINGKAT -->
<section id="tentang">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="section-label">TENTANG KAMI</div>

                <h2 class="section-title">
                    Perawatan Mobil untuk Perjalanan yang Lebih Nyaman
                </h2>

                <p class="section-description">
                    Raffi Auto Care menyediakan berbagai layanan perawatan
                    kendaraan, mulai dari penggantian oli, service berkala,
                    tune up, hingga pemeriksaan sistem pengereman.
                </p>

                <p class="section-description">
                    Kami berupaya membantu pelanggan menjaga performa
                    kendaraan melalui layanan yang sesuai dengan kebutuhan
                    perawatan mobil.
                </p>

                <a href="{{ route('tentang') }}" class="btn-red mt-3">
                    Selengkapnya
                </a>
            </div>

            <div class="col-lg-6">
                <img
                    src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?auto=format&fit=crop&w=1000&q=85"
                    alt="Perawatan kendaraan di bengkel"
                    class="about-image"
                    onerror="this.style.display='none'">
            </div>
        </div>
    </div>
</section>

<!-- AJAKAN MELIHAT LAYANAN -->
<section class="services-section">
    <div class="container text-center">
        <div class="section-label">LAYANAN KAMI</div>

        <h2 class="section-title">
            Layanan Perawatan Mobil
        </h2>

        <p class="section-description mb-4">
            Temukan layanan perawatan yang sesuai dengan kebutuhan kendaraan
            Anda melalui berbagai pilihan layanan Raffi Auto Care.
        </p>

        <a href="{{ route('layanan') }}" class="btn-red">
            Lihat Semua Layanan
        </a>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <h2>Mobil Terawat, Perjalanan Lebih Nyaman</h2>

                <p>
                    Jangan lupa melakukan perawatan berkala untuk membantu
                    menjaga performa dan kondisi kendaraan Anda.
                </p>
            </div>

            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('kontak') }}" class="btn-red">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
