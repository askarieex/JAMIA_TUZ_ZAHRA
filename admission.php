<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Madrasa Jamia-Al-Zahra || Admission </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/logo/MJZ-LOGO-old-2.png"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="./assets/css/admission.css" rel="stylesheet" type="text/css" />
    <style>
 
    .alert {
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: 20px;
        border-radius: 5px;
        width: 100%;
        text-align: center;
    }

    .alert.success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert.error {
        background-color: #f2dede;
        border-color: #ebcccc;
        color: #721c24;
    }

    .alert h2 {
        margin-top: 0;
        font-size:24px;
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
    <?php
include './components/header.php';

?>

    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Admission</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text</p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>Admission</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="formbold-main-wrapper">

        <form action="backend/process_admission_form.php" method="POST" id="admForm">
            <h2 class="formbold-form-title">Register now</h2>
            <div id="responseMessage">
            
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="name" class="formbold-form-label">
                        Name*
                    </label>
                    <input type="text" name="name" id="name" class="formbold-form-input" required />
                </div>
                <div>
                    <label for="fathers_name" class="formbold-form-label">Father's Name* </label>
                    <input type="text" name="fathers_name" id="fathers_name" class="formbold-form-input" required />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="qualification" class="formbold-form-label"> Qualification* </label>
                    <input type="text" name="qualification" id="qualification" class="formbold-form-input" required />
                </div>
                <div>
                    <label for="dob" class="formbold-form-label">Date of Birth* </label>
                    <input type="date" name="dob" id="dob" class="formbold-form-input" required />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="adress" class="formbold-form-label"> Adress* </label>
                    <input type="text" name="adress" id="adress" class="formbold-form-input" required />
                </div>
                <div>
                    <label for="mobile_no" class="formbold-form-label">Mobile No.* </label>
                    <input type="number" name="mobile_no" id="mobile_no" class="formbold-form-input" required />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="parent_mobile" class="formbold-form-label"> Parent's Mobile No.</label>
                    <input type="number" name="parent_mobile" id="parent_mobile" class="formbold-form-input" required />
                </div>

                <div>
                    <label for="gender" class="formbold-form-label"> Gender* </label>
                    <select name="gender" id="gender" class="formbold-form-input" required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>


            <p class="formbold-policy">
                The course content is subject to updates and revisions. Any changes will be communicated promptly to
                enrolled participants.
            </p>
            <button class="formbold-btn" type="submit">Submit</button>
        </form>
    </div>
    </div>


    <?php
      include './components/footer.php';
    ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $("#admForm").submit(function (e) {
            e.preventDefault(); // Prevent default form submission

            var formData = $(this).serialize(); // Serialize form data
            console.log(formData)
            $.ajax({
                type: 'POST',
                url: 'backend/process_admission_form.php',
                data: formData,
                success: function (response) {
                    $("#responseMessage").html(response); // Display response from server
                    // alert(response)
                    // console.log(response)
                    $("#admForm")[0].reset();
                }
            });
        });
    </script>
</body>

</html>