<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Madrasa Jamia-Al-Zahra || IJAZA </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="./assets/css/admission.css" rel="stylesheet" type="text/css" />
    <style>
        .about-section {
            padding: 100px 0;
            background-color: #f9f9f9;
            text-align: center;
        }

        .about-section h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #333;
        }

        .about-section p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
            line-height: 1.6;
            text-align: justify;
            padding: 0 20px;
        }

        .about-section .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 30px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .about-section .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <?php include './components/header.php'; ?>
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Ijaaza</h1>
                        <p>Learn more about our mission and values.</p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="ijaza.php">About Us</a></li>
                        <li>Ijaaza</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Ijaaza</h2>
                        <p>
                        Jamiatuz Zahra is honoured to have the ijaaza (permission) of:- <br>
                        ⏺Ayatullahiluzma Syed Ali Sistani<br>
                        ⏺Ayatullahiluzma Syed Ali Khamenei<br>
                        ⏺Ayatullahiluzma Nasir Makarim Shirazi<br>
                        to collect Sehme Imam and Sahme Sadaat and other ruqoome shariya.
                        </p><br>
                        <p>In order to strengthen and continue this educational movement and social reformation through women education, we need the support and backing of our community.</p>
                        <br>
                        <p>The greatest support that can be extended towards us by the intellectuals of the community is their views and opinions, as well as the financial support without which it will not be possible to provide facilities to the students, arrange teachers and organize different programs.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //====== Clients Logo Slider
        tns({
            container: '.client-logo-carousel',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 4,
                },
                1170: {
                    items: 6,
                }
            }
        });
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });


        // Storing Form Data


    </script>
</body>

</html>
