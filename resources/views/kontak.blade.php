@extends('layouts.app')

@section('title', 'Kontak | Raffi Auto Care')

@section('content')

<section class="page-banner">
    <div class="container">
        <div class="section-label" style="color:#ff5555;">
            INFORMASI KONTAK
        </div>

        <h1>Hubungi Raffi Auto Care</h1>

        <p>
            Temukan informasi lokasi dan jam operasional bengkel kami.
        </p>
    </div>
</section>

<section class="content-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">Kontak Kami</div>

            <h2 class="section-title">
                Kami Siap Membantu Anda
            </h2>

            <p class="section-description">
                Silakan hubungi nomor berikut untuk menanyakan
                informasi layanan dan perawatan kendaraan.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">📍</div>

                    <h5>Lokasi Cabang</h5>

                    <p>
                        Depok<br>
                        Cibinong<br>
                        Cibubur
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">📞</div>

                    <h5>Nomor Telepon</h5>

                    <p>
                        <a href="tel:0895704967070">
                            0895704967070
                        </a>
                    </p>

                    <a
                        href="https://wa.me/62895704967070"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="btn-red mt-3">
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">🕒</div>

                    <h5>Jam Operasional</h5>

                    <p>
                        Setiap hari<br>
                        09.00–18.00 WIB
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="cta-section">
    <div class="container text-center">

        <h2>Butuh Informasi Layanan?</h2>

        <p class="mt-3">
            Lihat daftar layanan dan harga perawatan kendaraan
            yang tersedia di Raffi Auto Care.
        </p>

        <a href="{{ route('layanan') }}" class="btn-red mt-2">
            Lihat Layanan
        </a>

    </div>
</section>

@endsection
