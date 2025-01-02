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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
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
        @yield('header')
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
        </section>
        <!-- /Hero Section -->

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
                          {{ $companyProfile->about }}
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
        </section>
        <!-- /About Section -->


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
                            <br>
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
        </section>
        <!-- /Clients Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="text-align: center;">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div>
            <!-- End Section Title -->

            <div class="container my-5">
                <div class="row gy-4 justify-content-center">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up">
                            <div class="service-item position-relative p-4 border rounded shadow-sm">
                                <div class="icon mb-3">
                                    <!-- Ikon berdasarkan id_services (opsional, disesuaikan sesuai kebutuhan) -->
                                    @if ($service->id_services == 3)
                                        <i class="bi bi-airplane-engines fs-1 text-primary"></i>
                                    @elseif ($service->id_services == 4)
                                        <i class="fa-solid fa-ship fs-1 text-primary"></i>
                                    @elseif ($service->id_services == 5)
                                        <i class="fas fa-truck fs-1 text-primary"></i>
                                    @elseif ($service->id_services == 6)
                                        <i class="fas fa-warehouse fs-1 text-primary"></i>
                                    @elseif ($service->id_services == 7)
                                        <i class="fas fa-headset fs-1 text-primary"></i>
                                    @elseif ($service->id_services == 8)
                                        <i class="fas fa-exclamation-triangle fs-1 text-primary"></i>
                                    @else
                                        <i class="fas fa-cogs fs-1 text-primary"></i>
                                    @endif
                                </div>
                                <h3 class="text-center">{{ $service->judul_services }}</h3>
                                <p class="text-muted text-center">{{ $service->description_services }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>




        </section>
        <!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">
            <img src="{{ asset('assetsUser/img/wallpaperflare.com_wallpaper (4).jpg') }}" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Kami menyediakan layanan ekspor yang cepat, aman, dan terpercaya untuk membantu bisnis
                                Anda menjangkau pasar internasional. Percayakan kebutuhan logistik Anda kepada kami.</p>
                            <a class="cta-btn" href="#contact">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->


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

                        @foreach ($galleris as $galleri)
                            <div class="col-lg-4 portfolio-item isotope-item filter-app">
                                <img src="{{ asset('storage/' . $galleri->image) }}" class="img-fluid"
                                    alt="" style="width: 500px; height: 250px; object-fit: cover;">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>Lorem ipsum, dolor sit</p>
                                    <a href="{{ asset('storage/' . $galleri->image) }}" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>
            <!-- End Section Title -->
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $companyProfile->addres }}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $companyProfile->phone_company }}</p>
                            </div>
                        </div><!-- End Info Item -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $companyProfile->email_company }}</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <form action="{{ route('admin.Contacts_store') }}" method="post" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
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
                    </div>
                    <!-- End Contact Form -->
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>


    <!-- /Footer  -->
    <footer id="footer" class="footer dark-background">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <!-- Social Links -->
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <!-- Copyright Section -->
                        <div class="copyright">
                            <p>© <span>Copyright</span> <strong class="px-1 sitename">PT</strong>
                                <span>{{ $companyProfile->company_name }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer End -->



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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="{{ asset('assetsUser/js/main.js') }}"></script>

</body>

</html>
