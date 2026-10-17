@extends('layouts.app')

@section('title', 'Layanan Kami | Raffi Auto Care')

@section('content')

@php
    $serviceImages = [
        'Service Berkala - Oli 3 Liter' => 'serviceberkala.jpg',
        'Service Berkala - Oli 4 Liter' => 'serviceberkala.jpg',
        'Tune Up Manual' => 'tuneup.jpg',
        'Tune Up Menggunakan Mesin' => 'tuneup.jpg',
        'Tune Up Mesin + Pembersihan Pullpump' => 'tuneup.jpg',
        'Ganti Oli 3 Liter' => 'gantioli.jpg',
        'Ganti Oli 4 Liter' => 'gantioli.jpg',
        'Pemeriksaan Rem' => 'cekrem.jpg',
    ];

    $serviceDescriptions = [
        'Service Berkala - Oli 3 Liter' =>
            'Layanan perawatan berkala untuk mobil yang menggunakan 3 liter oli mesin. Perawatan ini membantu menjaga kondisi mesin dan mendukung performa kendaraan.',

        'Service Berkala - Oli 4 Liter' =>
            'Layanan perawatan berkala untuk mobil yang menggunakan 4 liter oli mesin. Cocok untuk menjaga kondisi mesin sesuai kebutuhan kendaraan.',

        'Tune Up Manual' =>
            'Tune up manual merupakan pemeriksaan dan penyetelan beberapa komponen mesin untuk membantu menjaga performa, kestabilan, dan efisiensi kendaraan.',

        'Tune Up Menggunakan Mesin' =>
            'Tune up menggunakan mesin dilakukan dengan bantuan peralatan khusus untuk membantu memeriksa kondisi mesin dan mendukung proses perawatan kendaraan.',

        'Tune Up Mesin + Pembersihan Pullpump' =>
            'Layanan tune up mesin yang dilengkapi dengan pembersihan pullpump sesuai kebutuhan kendaraan untuk membantu menjaga kinerja sistem mesin.',

        'Ganti Oli 3 Liter' =>
            'Layanan penggantian oli mesin sebanyak 3 liter untuk membantu melumasi komponen mesin dan menjaga kinerjanya tetap optimal.',

        'Ganti Oli 4 Liter' =>
            'Layanan penggantian oli mesin sebanyak 4 liter untuk membantu mengurangi gesekan antarkomponen dan menjaga kondisi mesin kendaraan.',

        'Pemeriksaan Rem' =>
            'Layanan pemeriksaan sistem pengereman untuk membantu mengetahui kondisi rem dan mendukung keselamatan saat berkendara.',
    ];

    $formatHarga = function ($harga) {
        $angka = preg_replace('/[^0-9]/', '', (string) $harga);

        return number_format((float) ($angka ?: 0), 0, ',', '.');
    };
@endphp

{{-- Banner Halaman --}}
<section class="page-banner">
    <div class="container">
        <div class="section-label">LAYANAN KAMI</div>

        <h1>Solusi Perawatan Mobil Anda</h1>

        <p>
            Pilih layanan perawatan kendaraan yang sesuai
            dengan kebutuhan mobil Anda bersama Raffi Auto Care.
        </p>
    </div>
</section>

{{-- Daftar Layanan --}}
<section class="services-section">
    <div class="container">

        <div class="text-center mb-5">
            <div class="section-label">DAFTAR LAYANAN</div>

            <h2 class="section-title">
                Layanan Perawatan Mobil
            </h2>

            <p class="section-description">
                Temukan layanan yang sesuai dengan kebutuhan
                perawatan kendaraan Anda.
            </p>
        </div>

        <div class="row g-4">

            @forelse ($services as $service)

                <div class="col-md-6 col-lg-4">
                    <div class="service-card h-100">

                        {{-- Gambar Layanan --}}
                        <img
                            src="{{ asset('images/service/' . ($serviceImages[$service->name] ?? 'serviceberkala.jpg')) }}"
                            alt="{{ $service->name }}"
                            class="service-image"
                            loading="lazy"
                        >

                        <div class="p-4 d-flex flex-column">

                            {{-- Nomor Layanan --}}
                            <div class="service-number mb-3">
                                LAYANAN
                                {{ str_pad(($services->firstItem() ?? 1) + $loop->index, 2, '0', STR_PAD_LEFT) }}
                            </div>

                            {{-- Nama Layanan --}}
                            <h5 class="fw-bold mb-3">
                                {{ $service->name }}
                            </h5>

                            {{-- Harga --}}
                            <div class="service-price mb-3">
                                Rp{{ $formatHarga($service->price) }}
                            </div>

                            {{-- Tombol Deskripsi --}}
                            <button
                                type="button"
                                class="btn-red border-0 mt-auto"
                                data-bs-toggle="modal"
                                data-bs-target="#deskripsiLayanan{{ $service->id }}"
                            >
                                Lihat Deskripsi
                            </button>

                        </div>
                    </div>
                </div>

                {{-- Modal Deskripsi Layanan --}}
                <div
                    class="modal fade"
                    id="deskripsiLayanan{{ $service->id }}"
                    tabindex="-1"
                    aria-labelledby="judulLayanan{{ $service->id }}"
                    aria-hidden="true"
                >
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5
                                    class="modal-title fw-bold"
                                    id="judulLayanan{{ $service->id }}"
                                >
                                    {{ $service->name }}
                                </h5>

                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                    aria-label="Tutup"
                                ></button>
                            </div>

                            <div class="modal-body">

                                <img
                                    src="{{ asset('images/service/' . ($serviceImages[$service->name] ?? 'serviceberkala.jpg')) }}"
                                    alt="{{ $service->name }}"
                                    class="img-fluid rounded mb-3"
                                    style="width: 100%; height: 220px; object-fit: cover;"
                                >

                                <h6 class="fw-bold">Deskripsi Layanan</h6>

                                <p class="text-muted">
                                    {{ $serviceDescriptions[$service->name] ?? 'Informasi layanan belum tersedia.' }}
                                </p>

                                <div class="p-3 rounded bg-light">
                                    <span class="text-muted">Harga layanan</span>
                                    <h5 class="fw-bold mb-0">
                                        Rp{{ $formatHarga($service->price) }}
                                    </h5>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Tutup
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            @empty

                <div class="col-12">
                    <div class="alert alert-info text-center">
                        Belum ada data layanan yang tersedia.
                    </div>
                </div>

            @endforelse

        </div>

        {{-- Pagination --}}
        @if ($services->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $services->links() }}
            </div>
        @endif

    </div>
</section>

{{-- Ajakan Menghubungi Bengkel --}}
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-8">
                <h2>Butuh Perawatan untuk Mobil Anda?</h2>

                <p>
                    Hubungi Raffi Auto Care untuk mendapatkan
                    informasi lebih lanjut mengenai layanan kami.
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
