<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Freight Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Global Styling */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            background-size: cover;
            height: 100vh;
            /* Full height of the viewport */
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero-text {
            z-index: 2;
        }

        .hero h1 {
            font-size: 3rem;
            /* Larger font size */
            font-weight: bold;
            margin: 0;
        }

        .hero p {
            font-size: 1.5rem;
            margin: 10px 0 0 0;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }

        /* Styling for the section */
        .section-bg-4 {
            background-color: #f0f0f0;
            /* Light background color */
            padding: 50px 0;
            /* Padding for the section to create space inside */
        }

        /* Additional margin below hero section */
        #freight-1-desktop {
            margin-bottom: 50px;
            /* Adds space below hero section */
        }

        /* Adjust text content */
        .model-1 .content {
            text-align: left;
            /* Align text to the left */
        }

        .model-1 .content h1 {
            font-size: 2.5rem;
            /* Larger font for the heading */
            color: #333;
            /* Dark color for the heading */
            margin-bottom: 20px;
            /* Space between heading and paragraph */
        }

        .model-1 .content p {
            font-size: 1.1rem;
            /* Slightly larger text for the paragraph */
            color: #666;
            /* Lighter color for the text */
            line-height: 1.6;
            /* Improved line height for readability */
        }

        /* Image styling */
        .model-1 .img-border {
            text-align: center;
            /* Center image inside the div */
        }

        .model-1 .img-border img {
            max-width: 100%;
            /* Make the image responsive */
            height: auto;
            /* Maintain aspect ratio */
            border: 5px solid #ddd;
            /* Add border around the image */
            padding: 10px;
            /* Add padding around the image */
        }

        /* For mobile responsiveness */
        @media (max-width: 768px) {
            .model-1 .content {
                text-align: center;
                /* Center align the text on smaller screens */
            }

            .model-1 .content h1 {
                font-size: 2rem;
                /* Slightly smaller font on smaller screens */
            }

            .model-1 .content p {
                font-size: 1rem;
                /* Smaller font size for mobile */
            }

            .model-1 .row {
                text-align: center;
                /* Center content in smaller screens */
            }
        }


        /* Breadcrumb Section */
        .breadcrumb-section {
            background: #f8f9fa;
            padding: 20px 0;
        }

        .breadcrumb {
            background: transparent;
            margin: 0;
        }

        /* Content Section */
        .content-section {
            padding: 50px 0;
        }

        section {
            margin-bottom: 120px;
        }

        .content-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }

        .content-description {
            font-size: 1rem;
            margin-bottom: 30px;
            color: #555;
        }

        .content-image {
            margin-bottom: 20px;
        }

        /* Services Section */
        .service-item {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-item img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .service-item h4 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #333;
        }

        .service-item p {
            font-size: 0.9rem;
            color: #555;
        }

        /* Footer Section */
        .footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .box {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .box .img img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .detail h3 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        table {
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-text">
            <h1>Air Freight Services</h1>
            <p>Fast and Reliable Air Cargo Solutions</p>
        </div>
        <div class="hero-image">
            <img src="{{ asset('assetsUser/img/hero.png') }}" alt="Air Freight" class="img-fluid" />
        </div>
    </div>

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Air Freight</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Content Section -->
    <section class="section-bg-4 model-1" id="freight-1-desktop" style="margin-top: 170px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content">
                        <h1>Speedy delivery across the globe</h1>
                        <p>Our air freight solution is great for businesses of all sizes looking to get their
                            consignments in 2 days for intra-Asia delivery. We have daily and weekly fixed schedules
                            between Asia and major US and Europe gateways.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-border">
                        <img src="../themes/default/v2/assets/img/air/1.png" alt="Air Freight" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="freight-2-desktop">
        <div class="container">
            <h1 class="text-center font-weight-bold">Why Choose Us?</h1>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-md-6 col-sm-4 d-flex flex-column align-items-center p-3" style="gap: 16px">
                    <i class="bi bi-check-circle-fill text-primary" style="font-size: 3rem;"></i>
                    <h2 class="text-center"><b>Reliability</b></h2>
                    <p class="text-center" style="font-size: 20px;">99% on-time delivery.</p>
                </div>
                <div class="col-md-6 col-sm-4 d-flex flex-column align-items-center p-3" style="gap: 16px">
                    <i class="bi bi-telephone-fill text-success" style="font-size: 3rem;"></i>
                    <h2 class="text-center"><b>Support</b></h2>
                    <p class="text-center" style="font-size: 20px;">Ensure smooth handling of your air cargo.</p>
                </div>
                <div class="col-md-6 col-sm-4 d-flex flex-column align-items-center p-3" style="gap: 16px">
                    <i class="bi bi-box-seam-fill text-warning" style="font-size: 3rem;"></i>
                    <h2 class="text-center"><b>Committed Capacity</b></h2>
                    <p class="text-center" style="font-size: 20px;">Daily departure from or to Indonesia.</p>
                </div>
                <div class="col-md-6 col-sm-4 d-flex flex-column align-items-center p-3" style="gap: 16px">
                    <i class="bi bi-award-fill text-danger" style="font-size: 3rem;"></i>
                    <h2 class="text-center"><b>Experience</b></h2>
                    <p class="text-center" style="font-size: 20px;">Three decades of experience and an AEO certified
                        company.</p>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container d-flex flex-column flex-lg-row">

            <div class="w-100 d-flex flex-column g-3">
                <h1>Air Freight Forwarding Services</h1>

                <!-- Service List -->
                <div class="part d-flex flex-row g-2">
                    <i class="fas fa-check-circle" style="font-size: 28px; margin-right: 15px; margin-top: 5px;"></i>
                    <div class="content">
                        <h3>Consolidation Air Freight Services</h3>
                        <p>Delivering multiple products on the same route and worrying about the cost incurred? Use our
                            consolidated air freight services for affordable rates compared to single-shipment at a
                            time.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <i class="fas fa-check-circle" style="font-size: 28px; margin-right: 15px; margin-top: 5px;"></i>
                    <div class="content">
                        <h3>Expedited and Next Flight Out (NFO) Air Freight Services</h3>
                        <p>The ultimate solution for your time-critical freight. 24-48 hours transit time within Asia
                            and 72 hours for other destinations.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <i class="fas fa-check-circle" style="font-size: 28px; margin-right: 15px; margin-top: 5px;"></i>
                    <div class="content">
                        <h3>Charter Services</h3>
                        <p>Premium services for you with large volumes and urgent freight. Uniair Cargo’s team will pick
                            up your cargo and dispatch it immediately.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <i class="fas fa-check-circle" style="font-size: 28px; margin-right: 15px; margin-top: 5px;"></i>
                    <div class="content">
                        <h3>Owned Bonded Warehouse (TPS)</h3>
                        <p>When you import by air, your goods normally will be placed in a public warehouse, but as we
                            are an AEO certified forwarder, your goods can be directly transported to our own bonded
                            warehouse with in-house customs staff. An ultimate solution for safer and faster customs
                            clearance.</p>
                    </div>
                </div>
                <div class="part d-flex flex-row g-2">
                    <i class="fas fa-check-circle" style="font-size: 28px; margin-right: 15px; margin-top: 5px;"></i>
                    <div class="content">
                        <h3>Pet Transport (Export)</h3>
                        <p>Our Live Animal Delivery service is available for a wide range of animals, including dogs,
                            cats, birds, reptiles, and even exotic animals. We have LAR certification from IATA to
                            ensure your pets' safety.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container my-5">
        <div class="row ">
            <!-- Card 1 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/9.png') }}" alt="RAP CONTAINER">
                </div>
                <div class="detail">
                    <h3 class="text-center">RAP CONTAINER</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>ATA Code</b></td>
                                <td>:</td>
                                <td style="width: 49%">LD9</td>
                            </tr>
                            <tr>
                                <td><b>Internal Volume</b></td>
                                <td>:</td>
                                <td>505 cu. ft.</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>4,626 Kg</td>
                            </tr>
                            <tr>
                                <td><b>Loadable</b></td>
                                <td>:</td>
                                <td>747, 747F</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/2.png') }}" alt="PMC PALLET">
                </div>
                <div class="detail">
                    <h3 class="text-center">PMC PALLET</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>Size-Base</b></td>
                                <td>:</td>
                                <td style="width: 49%">96” x 125”</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>5,035 Kg</td>
                            </tr>
                            <tr>
                                <td><b>Loadable</b></td>
                                <td>:</td>
                                <td>747, 777</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/3.png') }}" alt="PLA PALLET">
                </div>
                <div class="detail">
                    <h3 class="text-center">PLA PALLET</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>Size-Base</b></td>
                                <td>:</td>
                                <td style="width: 49%">60.4” x 125”</td>
                            </tr>
                            <tr>
                                <td><b>Height</b></td>
                                <td>:</td>
                                <td>64”</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>3,175 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/4.png') }}" alt="PGA PALLET">
                </div>
                <div class="detail">
                    <h3 class="text-center">PGA PALLET</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>Size-Base</b></td>
                                <td>:</td>
                                <td style="width: 49%">60.4” x 125”</td>
                            </tr>
                            <tr>
                                <td><b>Height</b></td>
                                <td>:</td>
                                <td>64”</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>3,175 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/5.png') }}" alt="PEB PALLET">
                </div>
                <div class="detail">
                    <h3 class="text-center">PEB PALLET</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>Size-Base</b></td>
                                <td>:</td>
                                <td style="width: 49%">53” x 88”</td>
                            </tr>
                            <tr>
                                <td><b>Height</b></td>
                                <td>:</td>
                                <td>84”</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>1,800 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/6.png') }}" alt="AKE CONTAINER">
                </div>
                <div class="detail">
                    <h3 class="text-center">AKE CONTAINER</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>ATA Code</b></td>
                                <td>:</td>
                                <td style="width: 49%">LD3</td>
                            </tr>
                            <tr>
                                <td><b>Internal Volume</b></td>
                                <td>:</td>
                                <td>154 cu. ft.</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>1,600 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/7.png') }}" alt="DPE CONTAINER">
                </div>
                <div class="detail">
                    <h3 class="text-center">DPE CONTAINER</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>ATA Code</b></td>
                                <td>:</td>
                                <td style="width: 49%">LD11</td>
                            </tr>
                            <tr>
                                <td><b>Internal Volume</b></td>
                                <td>:</td>
                                <td>490 cu. ft.</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>4,400 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="box d-flex flex-column col-md-4">
                <div class="img">
                    <img src="{{ asset('assetsUser/img/container/8.png') }}" alt="LD29 CONTAINER">
                </div>
                <div class="detail">
                    <h3 class="text-center">LD29 CONTAINER</h3>
                    <table class="w-100">
                        <tbody>
                            <tr>
                                <td style="width: 49%"><b>ATA Code</b></td>
                                <td>:</td>
                                <td style="width: 49%">LD29</td>
                            </tr>
                            <tr>
                                <td><b>Internal Volume</b></td>
                                <td>:</td>
                                <td>650 cu. ft.</td>
                            </tr>
                            <tr>
                                <td><b>ULD Tare Weight</b></td>
                                <td>:</td>
                                <td>5,300 Kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="box d-flex flex-column col-md-4">
            <div class="img">
                <img src="{{asset('assetsUser/img/container/10.png')}}" alt="AKE CONTAINER">
            </div>
            <div class="detail d-flex flex-column g-2">
                <div class="name">
                    <h3 class="text-center">AKE CONTAINER</h3>
                </div>
                <table class="w-100">
                    <tbody>
                        <tr>
                            <td style="width: 49%"><b>Size-Base</b></td>
                            <td>:</td>
                            <td style="width: 49%">60” x 125”</td>
                        </tr>
                        <tr>
                            <td><b>Height</b></td>
                            <td>:</td>
                            <td>64” Weight</td>
                        </tr>
                        <tr>
                            <td><b>ULD Tare Weight</b></td>
                            <td>:</td>
                            <td>2,500 Kg</td>
                        </tr>
                        <tr>
                            <td><b>Loadable</b></td>
                            <td>:</td>
                            <td>747, 777</td>
                        </tr>
                        <tr>
                            <td><b>Aircraft type</b></td>
                            <td></td>
                            <td>Airbus</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="box d-flex flex-column col-md-4">
            <div class="img">
                <img src="{{asset('assetsUser/img/container/11.png')}}" alt="AMA CONTAINER">
            </div>
            <div class="detail d-flex flex-column g-2">
                <div class="name">
                    <h3 class="text-center">AMA CONTAINER</h3>
                </div>
                <table class="w-100">
                    <tbody>
                        <tr>
                            <td style="width: 49%"><b>Size-Base</b></td>
                            <td>:</td>
                            <td style="width: 49%">96” x 125”</td>
                        </tr>
                        <tr>
                            <td><b>Height</b></td>
                            <td>:</td>
                            <td>96” Weight</td>
                        </tr>
                        <tr>
                            <td><b>ULD Tare Weight</b></td>
                            <td>:</td>
                            <td>3,500 Kg</td>
                        </tr>
                        <tr>
                            <td><b>Loadable</b></td>
                            <td>:</td>
                            <td>747, 747F</td>
                        </tr>
                        <tr>
                            <td><b>Aircraft type</b></td>
                            <td></td>
                            <td>Boeing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="box d-flex flex-column col-md-4">
            <div class="img">
                <img src="{{asset('/assetsUser/img/container/12.png')}}" alt="AYF CONTAINER">
            </div>
            <div class="detail d-flex flex-column g-2">
                <div class="name">
                    <h3 class="text-center">AYF CONTAINER</h3>
                </div>
                <table class="w-100">
                    <tbody>
                        <tr>
                            <td style="width: 49%"><b>Size-Base</b></td>
                            <td>:</td>
                            <td style="width: 49%">88” x 108”</td>
                        </tr>
                        <tr>
                            <td><b>Height</b></td>
                            <td>:</td>
                            <td>76” Weight</td>
                        </tr>
                        <tr>
                            <td><b>ULD Tare Weight</b></td>
                            <td>:</td>
                            <td>2,800 Kg</td>
                        </tr>
                        <tr>
                            <td><b>Loadable</b></td>
                            <td>:</td>
                            <td>777, 787</td>
                        </tr>
                        <tr>
                            <td><b>Aircraft type</b></td>
                            <td></td>
                            <td>Airbus</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </section>




    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Your Company Name. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
