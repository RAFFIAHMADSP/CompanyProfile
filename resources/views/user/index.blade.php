<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $companyProfile->company_name }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assetsUser/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assetsUser/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsUser/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsUser/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{ asset('assetsUser/css/main.css') }}" rel="stylesheet">

    <style>
        #client-desktop .content {
            display: flex;
            flex-wrap: wrap;
            /* Agar gambar bisa teratur dalam beberapa baris */
            justify-content: space-around;
            /* Menyebarkan gambar secara merata */
            gap: 50px;
            /* Memberikan jarak antar gambar */
        }

        #client-desktop .content img {
            max-width: 100%;
            /* Gambar tidak akan melebihi lebar elemen induknya */
            height: auto;
            /* Menjaga proporsi gambar */
            object-fit: contain;
            /* Menyesuaikan gambar agar tetap proporsional */
            max-height: 50px;
            /* Atur batas ketinggian gambar agar tidak terlalu besar */
        }

        /* Untuk gambar dengan ukuran khusus */
        #client-desktop .content img[style] {
            width: auto !important;
            height: auto !important;
            max-height: 60px;
            /* Batasi tinggi untuk menjaga ukuran gambar */
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="{{asset('assetsUser/img/loggo.png')}}" alt=""> --}}
                <h1 class="sitename">{{ $companyProfile->company_name }}</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ asset('assetsUser/img/testimonials-bg.jpg') }}" alt="" data-aos="fade-in">

            <div class="container">

                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-xl-6 col-lg-8">
                        <h2>{{ $companyProfile->tagline }}<span>.</span></h2>
                    </div>


                </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('assetsUser/img/about.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>ABOUT</h3>
                        <p class="fst-italic">
                            Nusantara Link Trade adalah perusahaan ekspor yang memperkenalkan produk unggulan Indonesia
                            ke pasar internasional. Dengan layanan profesional berbasis teknologi, kami membawa
                            keunggulan produk Nusantara secara global.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>{{ $companyProfile->visi_company }}</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>{{ $companyProfile->misi_company }}</span></li>
                        </ul>
                        <p>
                            {{ $companyProfile->history }}
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <section id="client-desktop">
                        <div class="container">
                            <div class="title align-items-center">
                                <h1>Our Clients</h1>
                            </div>
                            <div class="content">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/1.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/2.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/3.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/4.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/5.png') }}"
                                    class="my-auto"
                                    style="width: 113px; height: 40px; max-width: fit-content; max-height: fit-content;"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/6.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/7.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/8.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/9.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/10.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/11.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/12.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/13.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/14.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/15.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/16.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/17.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/22.png') }}"
                                    alt=""
                                    style="width: 140px!important; height: 70px!important; max-width: fit-content; max-height: fit-content;">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/19.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/20.png') }}"
                                    alt="">
                                <img src="{{ asset('themes copy/default/v2/assets/img/home/clients/21.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </section>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- /Clients Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">
                    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img
                            src="{{ asset('assetsUser/img/features-bg.jpg') }}" alt=""></div>
                    <div class="col-lg-6">

                        <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <i class="bi bi-archive flex-shrink-0"></i>
                            <div>
                                <h4>Est labore ad</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                                </p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-basket flex-shrink-0"></i>
                            <div>
                                <h4>Harum esse qui</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                </p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-broadcast flex-shrink-0"></i>
                            <div>
                                <h4>Aut occaecati</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                        </div><!-- End Features Item-->

                        <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-camera-reels flex-shrink-0"></i>
                            <div>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div><!-- End Features Item-->

                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">

                    <!-- Card Pengiriman Udara -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <!-- Ikon pesawat untuk pengiriman udara -->
                                <i class="bi bi-airplane-engines"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Pengiriman Udara</h3>
                            </a>
                            <p>Pengiriman cepat dengan menggunakan pesawat untuk memastikan barang sampai dengan waktu
                                yang lebih singkat.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <!-- Card Pengiriman Laut -->
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <!-- Ikon kapal untuk pengiriman laut -->
                                <i class="fas fa-ship"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Pengiriman Laut</h3>
                            </a>
                            <p>Pengiriman barang menggunakan kapal laut untuk volume besar dengan biaya yang lebih
                                efisien dan ramah lingkungan.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>
            </div>


            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="{{asset('assetsUser/img/wallpaperflare.com_wallpaper (4).jpg')}}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Check our Portfolio</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/pengiriman-cargo.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-1.jpg') }}"
                                    title="App 1" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-2.jpg') }}"
                                    title="Product 1" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-3.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-3.jpg') }}"
                                    title="Branding 1" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-4.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-4.jpg') }}"
                                    title="App 2" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-5.jpg') }}"
                                    title="Product 2" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-6.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-6.jpg') }}"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-7.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-7.jpg') }}"
                                    title="App 3" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-8.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-8.jpg') }}"
                                    title="Product 3" data-gallery="portfolio-gallery-product"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-9.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('assetsUser/img/masonry-portfolio/masonry-portfolio-9.jpg') }}"
                                    title="Branding 2" data-gallery="portfolio-gallery-branding"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">GP</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                        href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsUser/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsUser/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assetsUser/js/main.js') }}"></script>

</body>

</html>
