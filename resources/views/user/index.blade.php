<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>End-to-End Logistics Solution | Uniair Cargo</title>


    <!-- Favicons -->
    <!-- <link href="https://www.uniaircargo.co.id/assets/img/favicon.ico" rel="icon"> -->
    <link href="favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png/" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="">




    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin="">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsUser/assetUser/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/themes/default/v2/assets/vendor/fontAwsome/css/all.min.css') }}" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PJP9KTL');
    </script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="{{ asset('assetsUser/themes/default/v2/assets/css/page/home.css') }}">
</head>

<body id="body-content">
    <!-- ======= Header ======= -->
    <header id="desktop-header" class="fixed-top">
        <div class="container d-flex justify-content-start">
            <!-- Logo Uniair -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('assetsUser/themes/default/v2/icon/icon/logo-uniair.png') }}" alt=""
                    class="img-fluid">
            </a>

            <!-- Logo Dimerco -->
            <a href="https://dimerco.com" target="_blank" class="logo me-auto pt-1">
                <img src="{{ asset('assetsUser/themes/default/v2/icon/icon/logo-dimerco.png') }}" alt=""
                    class="img-fluid">
            </a>

            <nav id="navbar" class="navbar d-flex align-items-center">
                <ul>
                    <li class="dropdown">
                        <a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="history/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/history.png') }}"
                                        class="logo-icon" alt=""><span>History</span></a></li>
                            <li><a href="key-industries/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/key%20industries.png') }}"
                                        class="icon" alt=""><span>Key Industries</span></a></li>
                            <li><a href="galleries/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/galleries.png') }}"
                                        class="icon" alt=""><span>Galleries</span></a></li>
                            <li><a href="achievement-%26-awards/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/achievements%20%26%20award.png') }}"
                                        class="icon" alt=""><span>Achievements &amp; Awards</span></a></li>
                            <li><a href="social-activities/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/social%20activites.png') }}"
                                        class="icon" alt=""><span>Social Activities</span></a></li>
                            <li><a href="career/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/career.png') }}"
                                        class="icon" alt=""><span>Career</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="air-freight/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/air%20freight.png') }}"
                                        class="icon" alt=""><span>Air Freight Forwarding</span></a></li>
                            <li><a href="ocean-freight/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/Ocean%20freight.png') }}"
                                        class="icon" alt=""><span>Ocean Freight Forwarding</span></a></li>
                            <li><a href="customs-clearance/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/Customs%20clearance.png') }}"
                                        class="icon" alt=""><span>Customs Clearance</span></a></li>
                            <li><a href="trucking-warehousing-distribution/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/trucking.png') }}"
                                        class="icon" alt=""><span>Trucking, Warehousing &amp;
                                        Distribution</span></a></li>
                            <li><a href="cargo-insurance-brokerage/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/cargo%20insurance%20brokerage.png') }}"
                                        class="icon" alt=""><span>Cargo Insurance Brokerage</span></a></li>
                            <li><a href="courier-services/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/truck.png') }}"
                                        class="icon" alt=""><span>Courier Services</span></a></li>
                            <li><a href="multimodal-transportation/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/multimodal%20transportation.png') }}"
                                        class="icon" alt=""><span>Multimodal Transportation</span></a></li>
                            <li><a href=""><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/value%20added%20services.png') }}"
                                        class="icon" alt=""><span>Value Added Services</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Resources</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="blog/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/blog.png') }}"
                                        class="logo-icon" alt=""><span>Blog</span></a></li>
                            <li><a href="news-press/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/news%20%26%20press.png') }}"
                                        class="icon" alt=""><span>News &amp; Press</span></a></li>
                            <li><a href="appendix-and-glossary/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/appendix%20%26%20glossary.png') }}"
                                        class="icon" alt=""><span>Appendix &amp; Glossary</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Networking</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="domestic-market/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/Networking/domestic%20market.png') }}"
                                        class="logo-icon" alt=""><span>Domestic Network</span></a></li>
                            <li><a href="international-network/"><img
                                        src="{{ asset('assetsUser/themes/default/v2/icon/nav/Networking/international%20market.png') }}"
                                        class="icon" alt=""><span>International Network</span></a></li>
                        </ul>
                    </li>
                    <li class="px-3">
                        <button onclick="window.location.href='https://www.uniaircargo.co.id/contact-us';"
                            type="button" class="contact-btn-nav">Contact Us</button>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color: black"></i>
            </nav>
        </div>
    </header>


    <!-- End Header -->



    <!-- ======= Header Mobile ======= -->

    <header id="mobile-header" class="">
        <!-- <div class="container justify-content-evenly"> -->
        <div class="container">
            <a href="" class="logo"><img
                    src=" https://www.uniaircargo.co.id/themes/default/v2/icon/icon/logo-uniair.png " alt=""
                    class="img-fluid"></a>
            <a href="https://dimerco.com" target="blank" class="logo me-auto pt-1"><img
                    src="{{ 'assetsUser/themes/default/v2/icon/icon/logo-dimerco.png' }}" alt=""
                    class="img-fluid"></a>
            <button class="hamburger">
                <div class="bar"></div>
            </button>
        </div>
    </header>
    <nav class="mobile-ver overflow-auto">
        <div class="container">
            <h1 class="fw-bold">About</h1>
            <div class="row">
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/history.png') }}"
                                class="logo-icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="history/" class="text-black"><span>History</span> </a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/social%20activites.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="social-activities/" class="text-black"><span>Social Activities</span> </a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/galleries.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="galleries/" class="text-black"><span>Galleries</span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/key%20industries.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="key-industries/" class="text-black"><span>Key Industries</span> </a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/achievements%20%26%20award.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="achievement-%26-awards/" class="text-black"><span>Achievements &amp;
                                    Awards</span> </a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/About/career.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="career/" class="text-black"><span>Career</span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="fw-bold">Services</h1>
            <div class="row">
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/air%20freight.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="air-freight/"><span class="text-black">Air Freight Forwarding</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/cargo%20insurance%20brokerage.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="cargo-insurance-brokerage/" class="text-black"><span>Cargo Insurance
                                    Brokerage</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/Customs%20clearance.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="customs-clearance/" class="text-black"><span>Customs Clearance</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/multimodal%20transportation.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="multimodal-transportation/" class="text-black"><span>Multimodal
                                    Transportation</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/Ocean%20freight.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="ocean-freight/" class="text-black"><span>Ocean Freight Forwarding</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/trucking.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="trucking-warehousing-distribution/" class="text-black"><span>Trucking,
                                    Warehousing, Distribution</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/truck.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="courier-services/" class="text-black"><span>Courier Services</span></a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/services/value%20added%20services.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="" class="text-black"><span>Value Added Services</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="fw-bold">Networking</h1>
            <div class="row">
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/Networking/domestic%20market.png') }}"
                                class="logo-icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="domestic-market/" class="text-black"><span>Domestic Network</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 my-auto">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/Networking/international%20market.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="international-network/" class="text-black"><span>International Network</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="fw-bold">Resource</h1>
            <div class="row">
                <div class="col-6">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/blog.png') }}"
                                class="logo-icon" alt="">
                        </div>
                        <div class="col-7">
                            <a href="blog/" class="text-black"><span>Blog</span> </a>
                        </div>
                    </div>
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/appendix%20%26%20glossary.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="appendix-and-glossary/" class="text-black"><span>Appendix &amp;
                                    Glossary</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mx-auto my-auto">
                        <div class="col-3 d-flex flex-wrap align-items-center">
                            <img src="{{ asset('assetsUser/themes/default/v2/icon/nav/Resource/news%20%26%20press.png') }}"
                                class="icon" alt="">
                        </div>
                        <div class="col-9">
                            <a href="news-%26-press/" class="text-black"><span>News &amp; Press</span> </a>
                        </div>
                    </div>
                </div>
            </div>

            <button onclick="window.location.href='{{ asset('https://www.uniaircargo.co.id/contact-us') }}';"
                type="button" class="contact-btn-nav mb-3">Contact Us</button>
        </div>
    </nav>


    <!-- ======= Hero Section ======= -->
    <section id="hero-mobile" style="position: relative; height: 100vh;">
        <!-- Gambar-gambar yang menggunakan asset() -->
        <img src="{{ asset('assetsUser/upload/files/banners/img-b3s6743faa5bf8c7.jpg') }}" alt="HUT 35"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/upload/files/banners/img-ijh5d9db7af0aa7b.jpg') }}" alt="Services"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/upload/files/banners/img-b0d5d9db8739a205.jpg') }}" alt="Competitive Rates"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/upload/files/banners/img-9mi5d9db907a3119.jpg') }}" alt="Air Custom"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/upload/files/banners/img-xig5d9db6357e44e.jpg') }}" alt="Core Values"
            class="image mobile-home-image">

        <div class="home-carousel-mobile">
            <div class="detail">
                <!-- <div class="button">
                    <button class="previous-button"><i class="fa-solid fa-chevron-left fa-lg"></i></button>
                </div> -->
                <div class="slide-mobile">
                    <!-- Konten slide bisa ditambahkan di sini -->
                </div>
                <!-- <div class="button">
                    <button class="next-button"><i class="fa-solid fa-chevron-right fa-lg"></i></button>
                </div> -->
            </div>
        </div>
    </section>


    <!-- End Hero -->

    <!-- ======= Mobile Hero Section ======= -->
    <section id="hero-mobile" style="position: relative; height: 100vh;">
        <!-- Gambar-gambar yang menggunakan asset() dari folder assetsUser -->
        <img src="{{ asset('assetsUser/img-b3s6743faa5bf8c7.jpg') }}" alt="HUT 35"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/img-ijh5d9db7af0aa7b.jpg') }}" alt="Services"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/img-b0d5d9db8739a205.jpg') }}" alt="Competitive Rates"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/img-9mi5d9db907a3119.jpg') }}" alt="Air Custom"
            class="image mobile-home-image">
        <img src="{{ asset('assetsUser/img-xig5d9db6357e44e.jpg') }}" alt="Core Values"
            class="image mobile-home-image">

        <div class="home-carousel-mobile">
            <div class="detail">
                <!-- Konten slide dapat ditambahkan di sini -->
                <div class="slide-mobile">
                    <!-- Slide konten akan ditambahkan di sini -->
                </div>
            </div>
        </div>
    </section>


    <!-- End Mobile Hero -->

    <section class="about" id="home-1-desktop">
        <div class="container d-flex flex-column flex-lg-row ">
            <div class="w-100 d-flex flex-column g-2">
                <h1>Over Three Decades of Excellence in Freight Forwarding</h1>
                <p style="color: #5E6666; font-weight: 400 !important;">We are always there to help your business with
                    supply chain and logistics. Hence, we are most notably known by our clients as an End-to-End
                    Logistics Partner.</p>
                <div class="button">
                    <button onclick="window.location.href='https://www.uniaircargo.co.id/contact-us';"
                        class="contact-btn">Contact Us</button>
                </div>
            </div>
            <div class="w-100 d-flex flex-column g-2">
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/experience.png') }}"
                        alt="" style="height: 40px;width:40px">
                    <div class="content">
                        <h3>Experience</h3>
                        <p>Over 33 years of experience as a leading freight forwarder company trusted by numerous
                            multinational companies.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/global_network.png') }}"
                        alt="" style="height: 37px;width:37px">
                    <div class="content">
                        <h3>Global Network</h3>
                        <p>We have global reach to over 67 countries, connecting your business to opportunities around
                            the world.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/flexible_agile.png') }}"
                        alt="" style="height: 40px;width:40px">
                    <div class="content">
                        <h3>Flexible and Agile</h3>
                        <p>Our ability to pivot and cater to ever-changing demands ensures your cargo reaches its
                            destination seamlessly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="home-1-mobile">
        <div class="container d-flex flex-column flex-lg-row">
            <div class="w-100 d-flex flex-column g-2">
                <h1 class="text-center">Over Three Decades of Excellence in Freight Forwarding</h1>
                <p class="text-center">We are always there to help your business with supply chain and logistics.
                    Hence, we are most notably known by our clients as an End-to-End Logistics Partner.</p>
                <!-- <div class="button">
                <button class="contact-btn">Contact Us</button>
            </div>-->
            </div>
            <div class="w-100 d-flex flex-column g-2">
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/experience.png') }}"
                        alt="" style="height: 30px;width:30px">
                    <div class="content">
                        <h2>Experience</h2>
                        <p>Over 33 years of experience as a leading freight forwarder company trusted by numerous
                            multinational companies.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/global_network.png') }}"
                        alt="" style="height: 27px;width:27px">
                    <div class="content">
                        <h2>Global Network</h2>
                        <p>We have global reach to over 67 countries, connecting your business to opportunities around
                            the world.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/about/flexible_agile.png') }}"
                        alt="" style="height: 30px;width:30px">
                    <div class="content">
                        <h2>Flexible and Agile</h2>
                        <p>Our ability to pivot and cater to ever-changing demands ensures your cargo reaches its
                            destination seamlessly.</p>
                    </div>
                </div>
                <div class="button mx-auto">
                    <button onclick="window.location.href='https://www.uniaircargo.co.id/contact-us';"
                        class="contact-btn">Contact Us</button>
                </div>
            </div>
        </div>
    </section>



    <section id="service-desktop" class="service section-bg-3">
        <div class="container">
            <div class="title">
                <h1 style="color: white">Uniair Cargo’s Services</h1>
                <h3 style="color: white" class="text-center">Our wide range of services cater to your business
                    specific needs. Reliable whenever and wherever needed.</h3>
            </div>
            <div class="d-flex flex-wrap flex-row">

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Air Freight Forwarding</h4>
                                <a href="{{ url('air-freight/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">For time-sensitive delivery.</p>
                        </div>
                        <!-- Menggunakan asset() untuk gambar -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/1.png') }}"
                            alt="">
                    </div>
                </div>

                <!-- Repeat this structure for other services with updated links and assets -->
                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Ocean Freight Forwarding</h4>
                                <a href="{{ url('ocean-freight/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">For cost-conscious businesses.</p>
                        </div>
                        <!-- Menggunakan asset() untuk gambar -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/2.png') }}"
                            alt="">
                    </div>
                </div>

                <!-- Continue similarly for other services -->

            </div>
        </div>
    </section>


    <section id="service-desktop" class="service section-bg-3">
        <div class="container">
            <div class="title">
                <h1 style="color: white">Uniair Cargo’s Services</h1>
                <h3 style="color: white" class="text-center">Our wide range of services cater to your business
                    specific needs. Reliable whenever and wherever needed.</h3>
            </div>
            <div class="d-flex flex-wrap flex-row">

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Air Freight Forwarding</h4>
                                <a href="{{ url('air-freight/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">For time-sensitive delivery.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/1.png') }}"
                            alt="Air Freight Forwarding">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Ocean Freight Forwarding</h4>
                                <a href="{{ url('ocean-freight/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">For cost-conscious businesses.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/2.png') }}"
                            alt="Ocean Freight Forwarding">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Customs Clearance</h4>
                                <a href="{{ url('customs-clearance/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">Ease up the customs process in Indonesia.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/3.png') }}"
                            alt="Customs Clearance">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="" style="font-size: 22px;">Trucking Warehousing Distribution</h4>
                                <a href="{{ url('trucking-warehousing-distribution/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">Comprehensive logistics for your business.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/4.png') }}"
                            alt="Trucking Warehousing Distribution">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Cargo Insurance Brokerage</h4>
                                <a href="{{ url('cargo-insurance-brokerage/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter" style="font-size: 16px;">We give you peace of mind, don’t
                                worry about accidental damages.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/5.png') }}"
                            alt="Cargo Insurance Brokerage">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Courier Services</h4>
                                <a href="{{ url('courier-services/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">Seamless urgent transportation to anywhere in Indonesia.
                            </p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/6.png') }}"
                            alt="Courier Services">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 p-2">
                    <div class="content">
                        <div class="text w-100 p-2 px-3 g-2">
                            <div class="arrow d-flex align-items-center justify-content-between">
                                <h4 class="">Multimodal Transportation</h4>
                                <a href="{{ url('multimodal-transportation/') }}">
                                    <div style="height: 50px; width:50px; background:#F0820A;padding:10px"
                                        class="rounded-circle">
                                        <svg width="30" height="30" viewBox="0 0 33 33" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.13814 7.83257H24.8033V23.4977M23.7154 8.92042L7.83271 24.8031"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="text-white fw-lighter">Connecting air, sea, and land transport for flexible
                                solutions.</p>
                        </div>
                        <!-- Menggunakan asset() dengan assetsUser -->
                        <img class="w-100" style="min-height: 250px;border-radius:6px"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/service/7.png') }}"
                            alt="Multimodal Transportation">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="industry">
        <div class="container" style="gap: 0">
            <div class="title">
                <h1>We Worked Across Different Industry Verticals</h1>
                <p class="text-center">In a different industry? We handled dozens of industries and likely have
                    experience with your products.<br>Contact us now to get personalized solutions for your business.
                </p>
            </div>
            <div class="">
                <div class="d-flex flex-row flex-wrap industrial justify-content-center mx-auto mb-5">
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/14.png') }}"
                            alt="" style="width: 60px !important; height: auto !important;">
                        <h3 class="text-center">Automotive</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/15.png') }}"
                            alt="" style="width: 60px !important; height: auto !important;">
                        <h3 class="text-center">Aerospace</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4 " src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/16.png') }}"
                            alt="">
                        <h3 class="text-center">Chemical</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4 " src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/17.png') }}"
                            alt="">
                        <h3 class="text-center">Construction</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/18.png') }}"
                            alt="">
                        <h3 class="text-center">Cosmetics</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/19.png') }}"
                            alt="">
                        <h3 class="text-center">Energy</h3>
                    </div>
                </div>
                <div class="d-flex flex-row flex-wrap industrial justify-content-center mx-auto mt-5">
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/20.png') }}"
                            alt="">
                        <h3 class="text-center">Electronics</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/21.png') }}"
                            alt="">
                        <h3 class="text-center">Food and Beverage</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/22.png') }}"
                            alt="">
                        <h3 class="text-center">Industrial</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/23.png') }}"
                            alt="">
                        <h3 class="text-center">Plastics and Rubber</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/24.png') }}"
                            alt="">
                        <h3 class="text-center">Retail</h3>
                    </div>
                    <div class="square col-6 col-md-3 col-lg-2 group1 col-md-3 col-lg-2 group1 d-flex flex-column">
                        <img class="mx-auto p-1 my-4" src="{{ asset('assetsUser/themes/default/v2/assets/img/home/industry/25.png') }}"
                            alt="">
                        <h3 class="text-center">Semiconductor</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section id="maps" class="section-bg">
        <div class="container">
            <div class="title">
                <h1>Global Network : Empowering Your International Trade Journey</h1>
                <p class="text-center">In the dynamic realm of international trade, trust and efficiency are the keys
                    to success. At Uniair Cargo, we take these principles to heart. A vast global network for your
                    business with a strong focus on the Asia Pacific region.</p>
            </div>
            <div id="map" class="w-100"></div>
        </div>
    </section>

    <section id="client-desktop">
        <div class="container">
            <div class="title align-items-center">
                <h1>Our Clients</h1>
            </div>
            <div class="content">
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/1.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/1.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/2.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/2.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/3.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/3.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/4.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/4.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/5.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/5.png') }}" class="my-auto"
                        style="width: 113px; height: 40px; max-width: fit-content; max-height: fit-content;" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/6.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/6.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/7.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/7.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/8.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/8.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/9.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/9.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/10.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/10.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/11.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/11.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/12.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/12.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/13.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/13.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/14.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/14.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/15.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/15.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/16.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/16.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/17.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/17.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/22.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/22.png') }}" alt=""
                        style="width: 140px!important; height: 70px!important; max-width: fit-content; max-height: fit-content;">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/19.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/19.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/20.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/20.png') }}" alt="">
                </a>
                <a href="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/21.png') }}">
                    <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/21.png') }}" alt="">
                </a>
            </div>
        </div>
    </section>
    

    <section id="client-mobile">
        <div class="container">
            <div class="title align-items-center">
                <h1>Our Clients</h1>
            </div>
            <div class="content d-flex flex-wrap justify-content-center" style="gap: 16px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/1.png') }}" alt="" class="my-auto" style="width: 63px; height: 21px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/2.png') }}" alt="" class="my-auto" style="width: 51px; height: 44px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/3.png') }}" alt="" class="my-auto" style="width: 84px; height: 16px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/4.png') }}" alt="" class="my-auto" style="width: 97px; height: 14px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/5.png') }}" alt="" class="my-auto" style="width: 57px; height: 20px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/6.png') }}" alt="" class="my-auto" style="width: 45px; height: 50px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/7.png') }}" alt="" class="my-auto" style="width: 33px; height: 33px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/8.png') }}" alt="" class="my-auto" style="width: 30px; height: 15px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/9.png') }}" alt="" class="my-auto" style="width: 50px; height: 19px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/10.png') }}" alt="" class="my-auto" style="width: 56px; height: 11px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/11.png') }}" alt="" class="my-auto" style="width: 36px; height: 31px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/12.png') }}" alt="" class="my-auto" style="width: 59px; height: 29px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/13.png') }}" alt="" class="my-auto" style="width: 33px; height: 32px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/14.png') }}" alt="" class="my-auto" style="width: 81px; height: 26px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/15.png') }}" alt="" class="my-auto" style="width: 36px; height: 26px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/16.png') }}" alt="" class="my-auto" style="width: 113px; height: 25px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/17.png') }}" alt="" class="my-auto" style="width: 83px; height: 25px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/22.png') }}" alt="" class="my-auto" style="width: 85px; height: 30px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/19.png') }}" alt="" class="my-auto" style="width: 84px; height: 48px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/20.png') }}" alt="" class="my-auto" style="width: 88px; height: 47px;">
                <img src="{{ asset('assetsUser/themes/default/v2/assets/img/home/clients/21.png') }}" alt="" class="my-auto" style="width: 87px; height: 50px;">
            </div>
        </div>
    </section>
    

    <section>
        <div class="d-flex align-items-center container">
            <div id="contact">
                <div class="detail">
                    <h1>
                        Get tailored solutions for all your logistics challenge.
                        <br>
                        <br>
                        Consult with us today
                    </h1>
                    <div class="button">
                        <button onclick="window.location.href='https://www.uniaircargo.co.id/contact-us';"
                            class="contact-btn">Contact Us</button>

                    </div>
                </div>
                <div class="image">


                    <img class="img-3" src="{{asset('assetsUser/themes/default/v2/icon/contact/center.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="blog-desktop" class="section-bg">
        <div class="container">
            <div class="title align-items-center">
                <h1>Recent Blog</h1>
            </div>
            <div class="row">
                <div class="box col-lg-6">
                    <div class="card">
                        <img class="card-img-top main" src="{{ asset('assetsUser/upload/files/news/img-pgm674536d7be3e4.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <p class="date">22 November 2024</p>
                            <div class="detail">
                                <div class="title">
                                    <h2>Top 5 Common Causes on Why New Businesses Fail?</h2>
                                    <p>Starting a business can often be seen as an exciting journey filled with ambition, creativity, and the constant strive towards success. However, the harsh reality of today’s industry is that many new businesses struggle</p>
                                </div>
                            </div>
                            <div class="more d-flex align-items-end d-none d-md-flex">
                                <a class="d-flex align-items-center" href="blog/top-5-common-causes-on-why-new-businesses-fail-608/">
                                    Read More
                                    <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boxs col-lg-6">
                    <div class="row">
                        <div class="box col-md-6">
                            <a class="card" href="blog/understanding-balance-of-trade-and-the-economical-impact-607/">
                                <img class="card-img-top main" src="{{ asset('assetsUser/upload/files/news/img-nt16745353edfecc.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date">18 November 2024</p>
                                    <div class="detail">
                                        <div class="title">
                                            <h2>Understanding Balance of Trade and the Economical Impact</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box col-md-6">
                            <a class="card" href="blog/7-types-of-loans-for-businesses-which-one-should-you-choose-606/">
                                <img class="card-img-top main" src="{{ asset('assetsUser/upload/files/news/img-dlh673aed06cdc09.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date">15 November 2024</p>
                                    <div class="detail">
                                        <div class="title">
                                            <h2>7 Types of Loans for Businesses: Which One Should You Choose?</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box col-md-6">
                            <a class="card" href="blog/apa-itu-oog-cargo-605/">
                                <img class="card-img-top main" src="{{ asset('assetsUser/upload/files/news/img-i8s6736ae81a7b52.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date">12 November 2024</p>
                                    <div class="detail">
                                        <div class="title">
                                            <h2>Apa Itu OOG Cargo?</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="box col-md-6">
                            <a class="card" href="blog/faktor-faktor-yang-harus-diperhatikan-sebelum-relokasi-pabrik-604/">
                                <img class="card-img-top main" src="{{ asset('assetsUser/upload/files/news/img-aze67360fb69c94c.jpg') }}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="date">09 November 2024</p>
                                    <div class="detail">
                                        <div class="title">
                                            <h2>Faktor-Faktor yang Harus Diperhatikan Sebelum Relokasi Pabrik</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    {{-- <section id="blog-mobile">
        <div class="container">
            <div class="title align-items-center">
                <h1>Recent Blog</h1>
            </div>
            <div class="autoplay">
                <div class="card p-2">
                    <!-- Image with assetsUser appended to the path -->
                    <img class="card-img-top main" src="{{ asset('upload/files/news/img-pgm674536d7be3e4.jpg') }}?{{ env('ASSETS_USER') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="date">22 November 2024</p>
                        <div class="detail">
                            <div class="title">
                                <h2>Top 5 Common Causes on Why New Businesses Fail?</h2>
                                <p>Starting a business can often be seen as an exciting journey filled with ambition,
                                    creativity, and the constant strive towards success. However, the harsh reality of
                                    today’s industry is that many new businesses struggle</p>
                            </div>
                        </div>
                        <!-- Link with assetsUser appended to the path -->
                        <div class="more d-flex align-items-end d-md-flex">
                            <a class="d-flex align-items-center"
                                href="{{ url('blog/top-5-common-causes-on-why-new-businesses-fail-608') }}?{{ env('ASSETS_USER') }}">
                                Read More
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    <!-- Image with assetsUser appended to the path -->
                    <img class="card-img-top main" src="{{ asset('upload/files/news/img-nt16745353edfecc.jpg') }}?{{ env('ASSETS_USER') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="date">18 November 2024</p>
                        <div class="detail">
                            <div class="title">
                                <h2>Understanding Balance of Trade and the Economical Impact</h2>
                                <p>Through the years, we have experienced and witnessed varying levels of fluctuation in
                                    economic health between states around the globe with various factors affecting its
                                    highs and lows</p>
                            </div>
                        </div>
                        <!-- Link with assetsUser appended to the path -->
                        <div class="more d-flex align-items-end d-md-flex">
                            <a class="d-flex align-items-center"
                                href="{{ url('blog/understanding-balance-of-trade-and-the-economical-impact-607') }}?{{ env('ASSETS_USER') }}">
                                Read More
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    <!-- Image with assetsUser appended to the path -->
                    <img class="card-img-top main" src="{{ asset('upload/files/news/img-dlh673aed06cdc09.jpg') }}?{{ env('ASSETS_USER') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="date">15 November 2024</p>
                        <div class="detail">
                            <div class="title">
                                <h2>7 Types of Loans for Businesses: Which One Should You Choose?</h2>
                                <p>Starting and running a business often requires significant investment in time,
                                    research, effort, planning, funds, and many more aspects in order to properly grow a
                                    successful and sustainable business.</p>
                            </div>
                        </div>
                        <!-- Link with assetsUser appended to the path -->
                        <div class="more d-flex align-items-end d-md-flex">
                            <a class="d-flex align-items-center"
                                href="{{ url('blog/7-types-of-loans-for-businesses-which-one-should-you-choose-606') }}?{{ env('ASSETS_USER') }}">
                                Read More
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    <!-- Image with assetsUser appended to the path -->
                    <img class="card-img-top main" src="{{ asset('upload/files/news/img-i8s6736ae81a7b52.jpg') }}?{{ env('ASSETS_USER') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="date">12 November 2024</p>
                        <div class="detail">
                            <div class="title">
                                <h2>Apa Itu OOG Cargo?</h2>
                                <p>Dalam urusan logistik, terutama di sektor kargo ada banyak istilah yang
                                    mendefinisikan beragamnya pengiriman dan penanganan barang.</p>
                            </div>
                        </div>
                        <!-- Link with assetsUser appended to the path -->
                        <div class="more d-flex align-items-end d-md-flex">
                            <a class="d-flex align-items-center"
                                href="{{ url('blog/apa-itu-oog-cargo-605') }}?{{ env('ASSETS_USER') }}">
                                Read More
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card p-2">
                    <!-- Image with assetsUser appended to the path -->
                    <img class="card-img-top main" src="{{ asset('upload/files/news/img-aze67360fb69c94c.jpg') }}?{{ env('ASSETS_USER') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="date">09 November 2024</p>
                        <div class="detail">
                            <div class="title">
                                <h2>Faktor-Faktor yang Harus Diperhatikan Sebelum Relokasi Pabrik</h2>
                                <p>Melakukan relokasi pabrik bukanlah keputusan yang mudah. Pasalnya untuk memindahkan
                                    lokasi pabrik akan memengaruhi banyak faktor lain seperti mencari lokasi yang cocok,
                                    relokasi karyawan, maupun mesin-mesin produksi.</p>
                            </div>
                        </div>
                        <!-- Link with assetsUser appended to the path -->
                        <div class="more d-flex align-items-end d-md-flex">
                            <a class="d-flex align-items-center"
                                href="{{ url('blog/faktor-faktor-yang-harus-diperhatikan-sebelum-relokasi-pabrik-604') }}?{{ env('ASSETS_USER') }}">
                                Read More
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    

    <section id="award-desktop">
        <div class="title align-items-center mb-4">
            <h1>Achievements</h1>
        </div>
        <div class="container d-flex flex-row px-5">
            <div class="picture col-12 col-md-8 d-flex flex-column g-4 my-auto">
                <div class="d-flex flex-row pe-5 g-4">
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/1.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/2.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/6.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/4.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/5.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                    <div class="card border-0 w-100" style="height: 100px">
                        <img style="height: 100%;object-fit:contain"
                            src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/3.png') }}?{{ env('ASSETS_USER') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="title col-12 col-md-4 d-flex flex-column justify-content-center">
                <h4 style="text-align: start;width:100%">Best PPJK KPU Award 2019</h4>
                <p style="text-align: start;width: 100%">Awarded as the best PPJK company by Customs Main Services
                    Office Tanjung Priok.</p>
            </div>
        </div>
    </section>
    
    <section id="award-mobile">
        <div class="container" style="gap: 0px;">
            <h1 class="fw-bold text-black text-center">PT. UNIAIR INDOTAMA CARGO</h1>
            <p class="text-center">awarded as the best PPJK company by Customs Main Services Office Tanjung Priok</p>
            <div class="row d-flex justify-content-evenly mb-4">
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/1.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/2.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/6.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-evenly">
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/4.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/5.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
                <div class="card border w-auto p-2" style="height: 90px; box-shadow: 10px 5px 20px rgba(192, 192, 192, 0.8);">
                    <img style="height: 100%;object-fit:contain; width: fit-content;"
                        src="{{ asset('assetsUser/themes/default/v2/assets/img/home/award/3.png') }}?{{ env('ASSETS_USER') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    




    <!-- ======= Footer ======= -->
    <footer id="desktop-footer" class="section-bg-2">

        <div class="footer-top" style="background-color: unset">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 footer-contact">
                        <div class="dflex flex-direction-row">
                            <img class="icon-logo" src="themes/default/v2/icon/icon/logo-uniair.png"
                                alt="">
                            <img class="icon-logo" src="themes/default/v2/icon/icon/logo-dimerco.png"
                                alt="">
                        </div>

                        <div class="detail">
                            <div class="image">
                                <i class="fa-solid fa-location-dot fa-xs"></i>
                            </div>
                            <div class="content">
                                <h4><b>Head Office - Jakarta</b></h4>
                                <p>PT. Uniair Indotama Cargo</p>
                                <p>Uniair Building</p>
                                <p>Jl. Danau Sunter Barat A-3/40</p>
                                <p>Sunter Agung Podomoro</p>
                                <p>Jakarta 14350, Indonesia</p>
                            </div>
                        </div>

                        <div class="detail">
                            <div class="image">
                                <i class="fa-solid fa-phone fa-xs"></i>
                            </div>
                            <div class="content">
                                <h4><b>Telephone</b></h4>
                                <p>(+62-21) 6583-8080</p>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="image">
                                <!-- <i class="fa-solid fa-phone fa-xs"></i> -->
                                <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4><b>Whatsapp</b></h4>
                                <p>+62812-8720-0800</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-12 footer-links">
                        <h4>About</h4>
                        <ul>
                            <li><a href="history/">History</a></li>
                            <li><a href="key-industries/">Key Industries</a></li>
                            <li><a href="galleries/">Galleries</a></li>
                            <li><a href="achievement-%26-awards/">Achievement &amp; Awards</a></li>
                            <li><a href="social-activities/">Social Activities</a></li>
                            <li><a href="career/">Careers</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-sm-6 col-12 footer-links">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="air-freight/">Air Freight Forwarding</a></li>
                            <li><a href="ocean-freight/">Ocean Freight Forwarding</a></li>
                            <li><a href="customs-clearance/">Customs Clearance</a></li>
                            <li><a href="trucking-warehousing-distribution/">Trucking, Warehousing &amp;
                                    Distribution</a></li>
                            <li><a href="cargo-insurance-brokerage/">Cargo Insurance Brokerage</a></li>
                            <li><a href="courier-services/">Courier Services</a></li>
                            <li><a href="multimodal-transportation/">Multimodal Transportation</a></li>
                            <li><a href="">Value Added Services</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-12 footer-links">
                        <h4>Networking</h4>
                        <ul>
                            <li><a href="domestic-market/">Domestic Market</a></li>
                            <li><a href="international-network/">International Market</a></li>
                        </ul>
                        <br>
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="blog/">Blog</a></li>
                            <li><a href="news-%26-press/">News &amp; Press</a></li>
                            <li><a href="appendix-and-glossary/">Appendix &amp; Glossary</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix" style="background-color: unset">
            <hr class="mb-3 mt-0">
            <div class="copyright flex-wrap">
                <p>© 2024 PT. Uniair Indotama Cargo</p>
                <span class="circle"></span>
                <p>All Rights Reserved</p>
                <p> | </p>
                <a href="terms-of-use/">
                    <p style="color: #5E6666;">Terms of Use</p>
                </a>
                <span class="circle"></span>
                <a href="privacy-policy/">
                    <p style="color: #5E6666;">Privacy Policy</p>
                </a>
            </div>
            <div class="copyright right d-flex align-items-center" style="gap: 11px;">
                <a href="https://www.instagram.com/uniaircargo/" target="_blank">
                    <i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: #434343F5"></i>
                </a>
                <a href="https://www.facebook.com/uniaircargo.id/" target="_blank">
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true" style="color: #434343F5"></i>
                </a>
                <a href="https://www.linkedin.com/company/uniair-cargo/" target="_blank">
                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true" style="color: #434343F5"></i>
                </a>
                <a href="https://www.youtube.com/@PTUniairIndotamaCargoOfficial  " target="_blank">
                    <i class="fa fa-youtube-play fa-2x" aria-hidden="true" style="color: #434343F5"></i>
                </a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- ======= Footer ======= -->
    <footer id="mobile-footer" class="section-bg-2">

        <div class="footer-top" style="background-color: unset">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 footer-contact">
                        <div class="dflex flex-direction-row">
                            <img class="icon-logo" src="themes/default/v2/icon/icon/logo-uniair.png"
                                alt="">
                            <img class="icon-logo" src="themes/default/v2/icon/icon/logo-dimerco.png"
                                alt="">
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12 footer-links">
                            <h4>About</h4>
                            <ul>
                                <li><a href="history/">History</a></li>
                                <li><a href="key-industries/">Key Industries</a></li>
                                <li><a href="galleries/">Galleries</a></li>
                                <li><a href="achievement-%26-awards/">Achievement &amp; Awards</a></li>
                                <li><a href="social-activities/">Social Activities</a></li>
                                <li><a href="career/">Careers</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-12 footer-links">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="air-freight/">Air Freight Forwarding</a></li>
                                <li><a href="ocean-freight/">Ocean Freight Forwarding</a></li>
                                <li><a href="customs-clearance/">Customs Clearance</a></li>
                                <li><a href="trucking-warehousing-distribution/">Trucking, Warehousing &amp;
                                        Distribution</a></li>
                                <li><a href="cargo-insurance-brokerage/">Cargo Insurance Brokerage</a></li>
                                <li><a href="courier-services/">Courier Services</a></li>
                                <li><a href="multimodal-transportation/">Multimodal Transportation</a></li>
                                <li><a href="">Value Added Services</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-2 col-sm-6 col-12 footer-links">
                            <h4>Networking</h4>
                            <ul>
                                <li><a href="domestic-market/">Domestic Market</a></li>
                                <li><a href="international-network/">International Market</a></li>
                            </ul>
                            <br>
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="blog/">Blog</a></li>
                                <li><a href="news-%26-press/">News &amp; Press</a></li>
                                <li><a href="appendix-and-glossary/">Appendix &amp; Glossary</a></li>
                            </ul>
                        </div>


                        <div class="detail">
                            <div class="image">
                                <i class="fa-solid fa-location-dot fa-xs"></i>
                            </div>
                            <div class="content">
                                <h4><b>Head Office - Jakarta</b></h4>
                                <p>PT. Uniair Indotama Cargo</p>
                                <p>Uniair Building</p>
                                <p>Jl. Danau Sunter Barat A-3/40</p>
                                <p>Sunter Agung Podomoro</p>
                                <p>Jakarta 14350, Indonesia</p>
                            </div>
                        </div>

                        <div class="detail">
                            <div class="image">
                                <i class="fa-solid fa-phone fa-xs"></i>
                            </div>
                            <div class="content">
                                <h4><b>Telephone</b></h4>
                                <p>(+62-21) 6583-8080</p>
                            </div>
                        </div>
                        <div class="detail">
                            <div class="image">
                                <!-- <i class="fa-solid fa-phone fa-xs"></i> -->
                                <i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4><b>Whatsapp</b></h4>
                                <p>+62812-8720-0800</p>
                            </div>
                        </div>

                        <div class="detail" style="gap: 11px;">
                            <a href="https://www.instagram.com/uniaircargo/" target="_blank">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true" style="color: #434343F5"></i>
                            </a>
                            <a href="https://www.facebook.com/uniaircargo.id/" target="_blank">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"
                                    style="color: #434343F5"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/uniair-cargo/" target="_blank">
                                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"
                                    style="color: #434343F5"></i>
                            </a>
                            <a href="https://www.youtube.com/@PTUniairIndotamaCargoOfficial  " target="_blank">
                                <i class="fa fa-youtube-play fa-2x" aria-hidden="true"
                                    style="color: #434343F5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix" style="background-color: unset">
            <hr class="mb-3 mt-0">
            <div class="copyright clearfix">
                <p>© 2024 PT. Uniair Indotama Cargo</p>
                <span class="circle"></span>
                <p>All Rights Reserved</p>
                <span class="circle"></span>
                <a href="terms-of-use/">
                    <p style="color: #5E6666;">Terms of Use</p>
                </a>
                <span class="circle"></span>
                <a href="privacy-policy/">
                    <p style="color: #5E6666;">Privacy Policy</p>
                </a>
            </div>
            <div class="copyright right">

            </div>
        </div>
    </footer>



    <!-- <div id="preloader"></div> -->

    <a id="whatsapp"
        style="position: fixed;bottom: 20px;right: 20px;display:flex;flex-direction:row;align-items:center;z-index:1000"
        href="https://api.whatsapp.com/send?phone=6281287200800&amp;text=Halo...+Saya+ingin+mengetahui+lebih+lanjut+mengenai+services+PT+Uniair+Indotama+Cargo.+%0D%0ANama+Perusahaan:+%0D%0APIC:+%0D%0ANo+WhatsApp:+%0D%0AEmail:+%0D%0AEnquiry+Details"
        target="_blank">
        <div class="box"
            style="width: 72px;height:70px;border-radius:24px 24px 0px 24px;background: linear-gradient(180deg, #121C45 -22.77%, #FF5E14 251.91%);padding:12px">
            <img src="themes/default/v2/icon/socialMedia/whatsapp2.png" alt=""
                style="height: 100%;width:100%">
        </div>
    </a>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"
        style="position: fixed; bottom: 110px;"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <!-- <script src="https://www.uniaircargo.co.id/assets/vendor/aos/aos.js"></script> -->
    <script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/aos/aos.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/glightbox/js/glightbox.min.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/glightbox/js/glightbox.min.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/swiper/swiper-bundle.min.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/swiper/swiper-bundle.min.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/waypoints/noframework.waypoints.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/waypoints/noframework.waypoints.js') }}?{{ env('ASSETS_USER') }}"></script>
<!-- <script src="https://www.uniaircargo.co.id/assets/vendor/php-email-form/validate.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/vendor/php-email-form/validate.js') }}?{{ env('ASSETS_USER') }}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>

<!-- Template Main JS File -->
<!-- <script src="https://www.uniaircargo.co.id/assets/js/main.js"></script> -->
<script src="{{ asset('assetsUser/themes/default/v2/assets/js/main.js') }}?{{ env('ASSETS_USER') }}"></script>


    <!--<script src="https://kit.fontawesome.com/95a745a1a3.js" crossorigin="anonymous"></script>-->
    <script>
        $(document).ready(function() {

            if (jQuery(window).width() > 769) {
                count = $(".home-image").length
                image = $(".home-image")


                current = image.index($(".image-active"))
                activate(current)
                for (i = 0; i < count; i++) {
                    output = '<button class="slide-button"></button>';
                    $(".slide").append(output);
                }
                $(".slide-button").eq(current).addClass("slide-active");
                slide = $(".slide-button")


                function activate(current) {
                    $(".image-active").removeClass("image-active");
                    $(".home-image").eq(current).addClass("image-active");
                    $(".slide-active").removeClass("slide-active");
                    $(".slide-button").eq(current).addClass("slide-active");

                    header = $(".image-active").eq(current).data('header')
                    subheader = $(".image-active").eq(current).data('subheader')
                    if (header != null) {
                        $('.home-header').text(header);
                    } else {
                        $('.home-header').text("")
                    }
                    if (subheader != null) {
                        $('.home-sub-header').text(subheader);
                    } else {
                        $('.home-sub-header').text("")
                    }
                }

                $(".next-button").click(function(e) {
                    e.preventDefault();
                    if (current == count - 1) {
                        current = 0
                        activate(current)
                    } else {
                        current = current + 1;
                        activate(current)
                    }
                });
                $(".previous-button").click(function(e) {
                    e.preventDefault();
                    if (current == 0) {
                        current = count - 1

                        activate(current)
                    } else {
                        current = current - 1;
                        activate(current)
                    }
                });
                $(".slide-button").click(function(e) {
                    e.preventDefault();
                    current = slide.index(this)
                    activate(current)
                });

                function nextslide() {
                    if (current == count - 1) {
                        current = 0
                        activate(current)
                    } else {
                        current = current + 1;
                        activate(current)
                    }
                }
                setInterval(function() {
                    nextslide();
                }, 7000);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            if (jQuery(window).width() < 769) {

                count = $(".mobile-home-image").length
                image = $(".mobile-home-image")


                current = image.index($(".image-active"))
                activate(current)
                for (i = 0; i < count; i++) {
                    output = '<button class="slide-button"></button>';
                    $(".slide-mobile").append(output);
                }
                $(".slide-button").eq(current).addClass("slide-active");
                slide = $(".slide-button")


                function activate(current) {
                    $(".image-active").removeClass("image-active");
                    $(".mobile-home-image").eq(current).addClass("image-active");
                    $(".slide-active").removeClass("slide-active");
                    $(".slide-button").eq(current).addClass("slide-active");

                    header = $(".image-active").eq(current).data('header')
                    subheader = $(".image-active").eq(current).data('subheader')
                    if (header != null) {
                        $('.home-header').text(header);
                    } else {
                        $('.home-header').text("")
                    }
                    if (subheader != null) {
                        $('.home-sub-header').text(subheader);
                    } else {
                        $('.home-sub-header').text("")
                    }

                }

                $(".next-button").click(function(e) {
                    e.preventDefault();
                    if (current == count - 1) {
                        current = 0
                        activate(current)
                    } else {
                        current = current + 1;
                        activate(current)
                    }
                });
                $(".previous-button").click(function(e) {
                    e.preventDefault();
                    if (current == 0) {
                        current = count - 1
                        activate(current)
                    } else {
                        current = current - 1;
                        activate(current)
                    }
                });
                $(".slide-button").click(function(e) {
                    e.preventDefault();
                    current = slide.index(this)
                    activate(current)
                });

                function nextslide() {
                    if (current == count - 1) {
                        current = 0
                        activate(current)
                    } else {
                        current = current + 1;
                        activate(current)
                    }
                }
                setInterval(function() {
                    nextslide();
                }, 7000);
            }
        });
    </script>

    <script>
        $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJP9KTL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->




</body>

</html>
