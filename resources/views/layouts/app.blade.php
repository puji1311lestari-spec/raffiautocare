<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Raffi Auto Care')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #222;
            background: #fff;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        .navbar {
            background: white;
            padding: 16px 0;
            box-shadow: 0 2px 12px rgba(0,0,0,.08);
        }

        .navbar-brand {
            font-size: 22px;
            font-weight: 800;
            color: #d71920;
        }

        .navbar-brand span {
            color: #222;
        }

        .nav-link {
            color: #222;
            font-size: 14px;
            font-weight: 500;
            margin-left: 12px;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #d71920;
        }

        .hero {
            min-height: 540px;
            display: flex;
            align-items: center;
            color: white;
            background:
                linear-gradient(90deg, rgba(0,0,0,.82), rgba(0,0,0,.38)),
                url('https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=1800&q=85');
            background-size: cover;
            background-position: center;
        }

        .hero-content {
            max-width: 720px;
            padding: 80px 0;
        }

        .hero h1 {
            font-size: clamp(36px, 5vw, 58px);
            line-height: 1.2;
            font-weight: 800;
            margin: 18px 0;
        }

        .hero p {
            color: #eee;
            line-height: 1.9;
        }

        .section-label {
            color: #d71920;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 12px;
        }

        .section-title {
            font-size: clamp(27px, 4vw, 38px);
            font-weight: 800;
            margin-bottom: 20px;
        }

        .section-description {
            color: #666;
            line-height: 1.9;
        }

        .btn-red {
            display: inline-block;
            background: #d71920;
            color: white;
            padding: 12px 23px;
            border-radius: 6px;
            border: 1px solid #d71920;
            font-weight: 600;
            text-decoration: none;
            transition: .3s;
        }

        .btn-red:hover {
            background: #b81218;
            color: white;
        }

        .btn-outline-white {
            display: inline-block;
            color: white;
            border: 1px solid white;
            padding: 12px 23px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            margin-left: 8px;
        }

        .btn-outline-white:hover {
            background: white;
            color: #222;
        }

        .page-banner {
            background: #191919;
            color: white;
            padding: 65px 0;
        }

        .page-banner h1 {
            font-size: clamp(30px, 4vw, 44px);
            font-weight: 800;
            margin-bottom: 12px;
        }

        .page-banner p {
            color: #ccc;
            margin: 0;
        }

        .info-strip {
            background: #d71920;
            color: white;
            padding: 22px 0;
        }

        .info-strip h5 {
            font-size: 15px;
            font-weight: 700;
        }

        .info-strip p {
            font-size: 13px;
            margin: 0;
            color: #ffeaea;
        }

        .content-section {
            padding: 80px 0;
        }

        .about-image {
            width: 100%;
            height: 390px;
            object-fit: cover;
            border-radius: 12px;
            background: #eee;
        }

        .about-feature {
            padding: 16px;
            background: #fff5f5;
            border-left: 4px solid #d71920;
            border-radius: 6px;
            margin-top: 20px;
        }

        .about-feature h5 {
            font-weight: 700;
            font-size: 16px;
        }

        .about-feature p {
            color: #666;
            margin-bottom: 0;
            font-size: 14px;
        }

        .services-section {
            background: #f7f7f7;
            padding: 75px 0;
        }

        .service-card {
            background: white;
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #eee;
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,.09);
        }

        .service-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            background: #eee;
        }

        .service-content {
            padding: 22px;
        }

        .service-card h5 {
            font-size: 17px;
            font-weight: 700;
            line-height: 1.5;
        }

        .service-card p {
            font-size: 13px;
            line-height: 1.8;
            color: #777;
        }

        .service-price {
            color: #d71920;
            font-size: 20px;
            font-weight: 800;
            margin: 16px 0;
        }

        .service-detail-btn {
            width: 100%;
            border: none;
            border-radius: 6px;
            background: #d71920;
            color: white;
            padding: 11px;
            font-weight: 600;
        }

        .service-detail-btn:hover {
            background: #b81218;
        }

        .modal-service-image {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .pagination {
            justify-content: center;
            margin-top: 35px;
            gap: 5px;
        }

        .pagination .page-link {
            color: #d71920;
            border-radius: 6px;
        }

        .pagination .active .page-link {
            background: #d71920;
            border-color: #d71920;
            color: white;
        }

        .contact-card {
            height: 100%;
            padding: 28px;
            background: white;
            border: 1px solid #eee;
            border-radius: 10px;
        }

        .contact-icon {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .contact-card h5 {
            font-weight: 700;
            margin-bottom: 12px;
        }

        .contact-card p {
            color: #666;
            line-height: 1.9;
            margin-bottom: 0;
        }

        .contact-card a {
            color: #d71920;
            text-decoration: none;
            font-weight: 600;
        }

        .cta-section {
            background: #191919;
            color: white;
            padding: 55px 0;
        }

        .cta-section h2 {
            font-weight: 800;
        }

        .cta-section p {
            color: #ccc;
            line-height: 1.8;
        }

        footer {
            background: #111;
            color: #aaa;
            text-align: center;
            padding: 25px 0;
            font-size: 13px;
        }

        footer strong {
            color: #ff4545;
        }

        @media (max-width: 768px) {
            .hero {
                min-height: 480px;
            }

            .content-section,
            .services-section {
                padding: 55px 0;
            }

            .about-image {
                height: 280px;
            }

            .btn-outline-white {
                margin: 12px 0 0;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                RAFFI <span>AUTO CARE</span>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Buka navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           href="{{ route('home') }}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}"
                           href="{{ route('tentang') }}">Tentang Kami</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}"
                           href="{{ route('layanan') }}">Layanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                           href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }}
            <strong>Raffi Auto Care</strong>.
            Company Profile Bengkel Mobil.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
