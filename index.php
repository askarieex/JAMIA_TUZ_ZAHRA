<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Madrasa Jamia-Al-Zahra || Home </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/images/logo/MJZ-LOGO-old-2.png"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />


    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-d5vV7Y25JW8xqz8ONpx6LID4CkG3tFu4EeznKtMUMckmPbVgQ+rUZuXRB+UXvxkEDkRgcO0yvZ8g9V9tzI2frA==" crossorigin="anonymous" />

    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
      /* Custom CSS for the gallery section */
      .gallery-section {
        background-color: #ffffff;
        padding: 80px 0;
      }
  
      .gallery-section .container {
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
        padding: 20px;
      }
  
      .gallery-section h2 {
        font-size: 32px;
        color: #000000;
        text-align: center;
        margin-bottom: 40px;
      }
  
      .gallery-section .grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 20px;
      }
  
      .gallery-section .grid-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
      }
  
      .gallery-section .grid-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease-in-out;
      }
  
      .gallery-section .grid-item:hover img {
        transform: scale(1.05);
      }
  
      .gallery-section .main-image {
        grid-column: 2 / span 2;
        grid-row: 1 / span 2;
      }
  
      .gallery-section .main-image img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
      }
  
      /* Responsive Styling */
      @media screen and (max-width: 768px) {
        .gallery-section h2 {
          font-size: 28px;
        }
  
        .gallery-section .grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      .single-achievement .fa{
        font-size: 35px;
        color:#ffff;
      }
      .notice-container{
        display: flex;
        padding: 0 35px;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
        background: #ffffff;
      }
      
      .wrapper i:first-child {
          z-index: 9;
      }
      .carousel .card {
       height: 60vh;
       background:#f1f1f1;
      }
      .card p{
        padding:12px;
        font-size:13px;
        font-style:italic;
      }
      .card h2{
        font-size:18px;
        font-style:italic;
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
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section class="hero-area">
      <div class="hero-slider">
        <!-- Single Slider -->
        <div class="hero-inner overlay overlay-video">
            <video autoplay muted loop>
                <source src="drone.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-2 col-md-12 co-12">
                <div class="home-slider">
                  <div class="hero-text">
                    <h5 class="wow fadeInUp" data-wow-delay=".3s">
                      Start to Learning Today 
                    </h5>
                    <h1 class="wow fadeInUp" data-wow-delay=".5s">
                        WELCOME TO JAMIA TUZ ZAHRA
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".7s">
                        Jamia Tuz Zahra is an Academic, Islamic and Madrasa-style seminary institution in Lucknow, India. It is the first Shia girls Madrasa in India.
                    </p>
                    <div class="button wow fadeInUp" data-wow-delay=".9s">
                      <a href="admission.php" class="btn">APPLY NOW</a>
                      <a href="donate.php" class="btn alt-btn">DONATE</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!--/ End Hero Area -->

    <!-- Start About Us Area -->
    <section class="about-us section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="about-left">
              <div class="about-title align-left">
                <span class="wow fadeInDown" data-wow-delay=".2s"
                  >About Our University</span
                >
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                  Welcome to our campus
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".6s">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, do
                  eius mod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad min im veniam, quis nostrud exercitati ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="qote wow fadeInUp" data-wow-delay=".8s">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, do
                  eius mod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="button wow fadeInUp" data-wow-delay="1s">
                  <a href="about-us.html" class="btn">Read More</a>
                  <a
                    href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                    class="glightbox video btn"
                  >
                    Play Video<i class="lni lni-play"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="about-right wow fadeInRight" data-wow-delay=".4s">
              <img src="assets/images/about/about-img.jpg" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /End About Us Area -->

    <!-- Start Courses Area -->
  

    <!-- Start Achivement Area -->
    <section class="our-achievement section overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-12">
            <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
            <i class="fa fa-university"></i>
              <h3 class="counter">
                <span id="secondo1" class="countup" cup-end="25">25</span>+
              </h3>
              <h4>Faculty</h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
            <i class="fa fa-book"></i>
              <h3 class="counter">
                <span id="secondo2" class="countup" cup-end="5">5</span>+
              </h3>
              <h4>Online Courses</h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
              <i class="fa fa-users"></i>
              <h3 class="counter">
                <span id="secondo3" class="countup" cup-end="800">800</span>+
              </h3>
              <h4>Students</h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
            <i class="fa fa-bed"></i>
              <h3 class="counter">
                <span id="secondo3" class="countup" cup-end="120">120</span>+
              </h3>
              <h4>Hostelers</h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-12">
            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
              <i class="fa fa-graduation-cap"></i>
              <h3 class="counter">
                <span id="secondo3" class="countup" cup-end="320">320</span>+
              </h3>
              <h4>Alumni</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br><br><br><br>
    <!-- End Achivement Area -->
    <section class="gallery-section">
      <div class="container">
        <h2>Our Gallery</h2>
        <div class="grid">
          <div class="grid-item main-image">
            <img src="./assets/images/about/1.jpg" alt="Main Image">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/2.jpg" alt="Gallery Image 1">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/3.jpg" alt="Gallery Image 2">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/4.jpg" alt="Gallery Image 3">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/5.jpg" alt="Gallery Image 4">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/6.jpg" alt="Gallery Image 5">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/7.jpg" alt="Gallery Image 6">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/8.jpg" alt="Gallery Image 7">
          </div>
          <div class="grid-item">
            <img src="./assets/images/about/9.jpg" alt="Gallery Image 8">
          </div>
        </div>
      </div>
    </section>


<br><br><br>
    <h2 class="wow fadeInUp" data-wow-delay=".4s" style="text-align: center;">
                  Welcome to our campus
    </h2>
<div class="notice-container">
<div class="dark-layer"> 
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
        <li class="card">
          <h2>Blanche Pearson</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A eius praesentium quibusdam modi, porro sit magni maxime odit, illum tempora eos minima laborum magnam blanditiis in natus labore. Exercitationem dolores repellat id officiis corrupti impedit, porro iusto, voluptatem optio cumque adipisci at ipsam pariatur cupiditate dolorum doloremque obcaecati corporis! Incidunt, dolorum soluta totam enim dolorem voluptatibus est, harum nihil deserunt commodi, consequuntur et iusto. Eius amet sint nobis deleniti quis reprehenderit animi, harum rem dolorem itaque tempore iusto? Necessitatibus sed similique deserunt quidem nesciunt ipsa, repellendus accusantium voluptatum temporibus voluptate, quis earum inventore facilis consequuntur alias debitis aliquid reprehenderit obcaecati?</p>
          <!-- <span>Sales Manager</span> -->
        </li>
      
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>


    </div> 
    </div>



    <!-- Start Newsletter Area -->
    <section class="newsletter-area section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
            <div class="newsletter-title">
              <span>Sign Up for</span>
              <h2>The Newsletter</h2>
              <p>
                Subscribe to us to always stay in touch with us and get the
                latest news<br />
                about our company and all of our activities!
              </p>
            </div>
            <!-- Start Newsletter Form -->
            <div class="subscribe-text wow fadeInUp" data-wow-delay=".2s">
              <form
                action="mail/mail.php"
                method="get"
                target="_blank"
                class="newsletter-inner"
              >
                <input
                  name="EMAIL"
                  placeholder="Your email address"
                  class="common-input"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your email address'"
                  required=""
                  type="email"
                />
                <div class="button">
                  <button class="btn">Subscribe Now!</button>
                </div>
              </form>
              <ul class="newsletter-social">
                <li>
                  <a href="javascript:void(0)"
                    ><i class="lni lni-facebook-original"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="lni lni-twitter-original"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="lni lni-instagram"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="lni lni-linkedin-original"></i
                  ></a>
                </li>
                <li>
                  <a href="javascript:void(0)"
                    ><i class="lni lni-google"></i
                  ></a>
                </li>
              </ul>
            </div>
            <!-- End Newsletter Form -->
          </div>
        </div>
      </div>
    </section>


    <!-- /End Newsletter Area -->
    <!-- Start Call To Action Area -->
    <!-- <section class="call-action section overlay">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="call-content">
              <span>EduGrids Free Lite Version</span>
              <h2>
                Currently you are using free <br />Lite Version of EduGrids
              </h2>
              <p>
                Please, purchase full version of the template to get all
                pages,<br />
                features and commercial license
              </p>
              <div class="button">
                <a href="javascript:void(0)" class="btn">Buy Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- /End Call To Action Area -->
    <!-- Start Clients Area -->
   

    <!-- <div class="client-logo-section">
      <div class="container">
        <div class="client-logo-wrapper">
          <div
            class="client-logo-carousel d-flex align-items-center justify-content-between"
          >
            <div class="client-logo">
              <img src="assets/images/clients/client1.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client2.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client3.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client4.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client5.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client2.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client3.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client4.svg" alt="" />
            </div>
            <div class="client-logo">
              <img src="assets/images/clients/client5.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- End Clients Area -->

    <!-- Start Footer Area -->
    <?php
      include './components/footer.php';
    ?>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
      const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
    </script>
    <script type="text/javascript">
      //========= Hero Slider
      tns({
        container: ".hero-slider",
        items: 1,
        slideBy: "page",
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: [
          '<i class="lni lni-arrow-left"></i>',
          '<i class="lni lni-arrow-right"></i>',
        ],
      });
      //====== Clients Logo Slider
      tns({
        container: ".client-logo-carousel",
        slideBy: "page",
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
          },
        },
      });
      //========= glightbox
      GLightbox({
        href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
        type: "video",
        source: "youtube", //vimeo, youtube or local
        width: 900,
        autoplayVideos: true,
      });

 
    </script>
  </body>
</html>
