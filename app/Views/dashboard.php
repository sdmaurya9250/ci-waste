<!doctype html>
<html lang="en">


<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <link rel="icon" href="images/favicon.png">
   <title>ECO HTML</title>
   <!-- CSS FILES START -->
   <link href="/css/style.css" rel="stylesheet">
   <link href="/css/custom.css" rel="stylesheet">
   <link href="/css/color.css" rel="stylesheet">
   <link href="/css/responsive.css" rel="stylesheet">
   <link href="/css/owl.carousel.min.css" rel="stylesheet">
   <link href="/css/bootstrap.min.css" rel="stylesheet">
   <link href="/css/prettyPhoto.css" rel="stylesheet">
   <link href="/css/all.min.css" rel="stylesheet">
   <link href="/css/slick.css" rel="stylesheet">
   <!-- CSS FILES End -->
   <style>
      body {
         background-color: #00e3ff14;
      }
   </style>
</head>

<body>
   <div class="wrapper home1">
      <!--Header Start-->
      <header class="header-style-1">
         <nav class="navbar navbar-expand-lg shadow-lg">
            <a class="logoo navbar-brand" href="/"><img src="/images/logo.png" class="logos" alt=""></a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i
                  class="fas fa-bars"></i> </button> -->
            <ul class="float-left topside-menu">
               <li> <a class="con font-weight-bold" href="#"><?php echo session()->get('name'); ?></a> </li>
               <li class="burger font-weight-bold"> <a href="#"><i class="fas fa-bars"></i> Menu</a> </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                     <a class="nav-link font-weight-bold" href="#" role="button"> Home </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle font-weight-bold fs-1" href="#about" role="button"
                        aria-haspopup="true" aria-expanded="false"> About </a>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false"> How it Work </a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle font-weight-bold" href="#Successhistory" role="button"
                        aria-haspopup="true" aria-expanded="false"> Our Success </a>
                  </li>

                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle font-weight-bold" href="#ContactUs" role="button"
                        aria-haspopup="true" class="scroll-link" onclick="slowScroll('#target')" aria-expanded="false">
                        Contact Us </a>
                  </li>
               </ul> -->
               <!-- <ul class="float-left topside-menu">
                  <li> <a class="con font-weight-bold" href="#"></a> </li>
                  <li><a href="#search"> <i class="fas fa-search"></i> </a></li>
                  <li class="burger font-weight-bold"> <a href="#"><i class="fas fa-bars"></i> Menu</a> </li>
               </ul> -->
            </div>
         </nav>
      </header>
      <!--Header End-->

      <!--Slider Start-->
      <section id="home-slider" class="owl-carousel owl-theme wf100">
         <div class="item">
            <div class="slider-caption">
               <div class="container">
                  <div class="row">
                     <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                        <strong>100k Plants Grown in 2018,</strong>
                        <h1>The World</h1>
                        <p> Environmental awareness is not a trend that comes
                           working towards making a small impact on Earth.</p>
                     </div>
                     <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6">
                        <img src="/images/bgimg/tempo.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <img src="/images/bgimg/bg.jpg" alt="">
         </div>
      </section>
      <!--Slider End-->
      <!--Service Area Start-->
      <section class="services-area wf100">
         <div class="container mt-5">
            <ul>
               <li>
                  <a href="paper.html">
                     <div class="sinfo">
                        <img src="/images/Paper/p1.png" alt="">
                        <h6>PEPAR</h6>
                        <p>Waste Management</p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="metal.html">
                     <div class="sinfo">
                        <img src="/images/Metal/metal.png" alt="">
                        <h6>METAL</h6>
                        <p>Aluminum, Steel, Brass</p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="/plastic.html">
                     <div class="sinfo">
                        <img src="/images/Plastic/plastic.png" alt="">
                        <h6>PLASTIC</h6>
                        <p>Save Earth</p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="/ewaste.html">
                     <div class="sinfo">
                        <img src="/images/E-waste/ewaste.png" alt="">
                        <h6>E-WASTE</h6>
                        <p>Save Electircals Part</p>
                     </div>
                  </a>
               </li>
               <li>
                  <a href="/clothe.html">
                     <div class="sinfo">
                        <img src="/images/Clothe/clothe.jpg" alt="">
                        <h6>CLOTHES</h6>
                        <p>Don't Waste Your Clothes</p>
                     </div>
                  </a>
               </li>
            </ul>
         </div>
      </section>
      <!--Service Area End-->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body1">
                  <div class="container">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

      <section class="container">
         <div class="row">
            <div class="col-md-6 mt-5" data-aos="zoom-in-up">
               <a href="/demo.html">
                  <div class="c-info text-center shadow-lg border border-info backcolor">
                     <i class="size_i fa-solid fa-clock"></i>
                     <h6 class="p-3">Schedule Pickup</h6>
                  </div>
               </a>
            </div>
            <div class="col-md-6 mt-5" data-aos="zoom-in-up">
               <a href="/paper.html">
                  <div class="c-info text-center shadow-lg border border-primary backcolor">
                     <i class="size_i2 fa-solid fa-clipboard-list"></i>
                     <h6 class="p-3">Rate List</h6>
                  </div>
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 mt-5" data-aos="zoom-in-up">
               <div class="c-info text-center shadow-lg border border-warning backcolor">
                  <i class="size_i3 fa-solid fa-truck-fast"></i>
                  <h6 class="p-3">How it will Work?</h6>
               </div>
            </div>
         </div>
      </section>


      <!--About Section Start-->
      <section class=" wf100 p80 mb-5 shadow-lg mt-5" id="about"> <!--home-about-->
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about-txt">
                     <h2> <span>ecova.</span> is providing the best
                        solution of Eco Environment
                     </h2>
                     <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green
                        businesses helping people save energy, water, and other resources. <strong>Definitely, you can
                           go with this business as it is a nothing but the future.</strong> </p>
                     <p> When you embrace eco awareness as a part of your daily life, you can defintiely think about the
                        Environment business. </p>
                     <ul>
                        <li><i class="fas fa-check"></i> Solar Energy</li>
                        <li><i class="fas fa-check"></i> Waste Management </li>
                        <li><i class="fas fa-check"></i> Eco Ideas </li>
                        <li><i class="fas fa-check"></i> Recycling Materials</li>
                        <li><i class="fas fa-check"></i> Plant Ecology</li>
                        <li><i class="fas fa-check"></i> Saving Wildlife </li>
                     </ul>
                     <a class="lm" href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Learn More</a>
                     <!-- Button trigger modal -->
                     <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">learn more</button> -->
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about-pic">
                     <div class="pic1">
                        <div id="pic-slider" class="owl-carousel owl-theme">
                           <div class="item"><img src="images/aboutpic1.jpg" alt=""></div>
                           <div class="item"><img src="images/aboutpic3.jpg" alt=""></div>
                           <div class="item"><img src="images/aboutpic5.jpg" alt=""></div>
                        </div>
                     </div>
                     <div class="pic2"><img src="/images/aboutpic2.jpg" alt=""></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- How its work -->
      <section id="How_it_work">
         <div class="container how mt-5 mb-5">
            <div class="mb-5">
               <h2>How it Work</h2>
            </div>
            <div class="row" data-aos="fade-right">
               <div class="c-info col polygon polygon1 border-5 border-primary backcolor">
                  <i class="size_1 fas fa-recycle"></i>
                  <h6 class="p-3 m-3">Segregate Your Recyclables</h6>
               </div>
               <div class="c-info col polygon polygon2 border-5 border-danger backcolor">
                  <i class="size_2 far fa-clock"></i>
                  <h6 class="p-3 m-3">Schedule a Pickup</h6>
               </div>
               <div class="c-info col polygon polygon3 border-5 border-warning backcolor">
                  <i class="size_3 fas fa-door-open"></i>
                  <h6 class="p-3 m-3">Door Step Service</h6>
               </div>
               <div class="c-info col polygon polygon4 border-5 border-info backcolor">
                  <i class="size_4 fas fa-money-bill-alt"></i>
                  <h6 class="p-3 m-3">Instant Payment</h6>
               </div>
               <div class="c-info col polygon polygon5 border-5 border-success backcolor">
                  <i class="size_5 fas fa-thumbs-up"></i>
                  <h6 class="p-3 m-3">Congrats</h6>
               </div>
            </div>
         </div>
      </section>

      <div class="container">
         <div class="container1">
            <div class="row">
               <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
                  <div class="card1">
                     <div class="imgBx">
                        <img class="img1" src="/images/Paper/news.jpg" alt="">
                     </div>
                     <div class="content1">
                        <h2>Card 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                           dicta non
                           iure minus rerum.</p>
                     </div>
                  </div>
               </div>
               <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
                  <div class="card1">
                     <div class="imgBx">
                        <img class="img1" src="/images/Paper/magazine.jpg" alt="">
                     </div>
                     <div class="content1">
                        <h2>Card 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                           dicta non
                           iure minus rerum.</p>
                     </div>
                  </div>
               </div>
               <div class="col-4 col-md-4 col-sm-4 col-lg-4 col-xl-4">
                  <div class="card1">
                     <div class="imgBx">
                        <img class="img1" src="/images/Paper/journal.jpg" alt="">
                     </div>
                     <div class="content1">
                        <h2>Card 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, deserunt voluptas suscipit
                           dicta non
                           iure minus.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <!--Services Slider Start-->
      <section class=" wf100 mt-5 p80bottom">
         <div class="container">
            <div class="row">
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb">
                        <a href="#"><i class="fas fa-link"></i></a>
                        <img src="/images/serimg1.jpg" alt="">
                     </div>
                     <div class="ser-txt">
                        <h4> <a href="#">Control Pollution & Environment</a> </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg2.jpg" alt=""></div>
                     <div class="ser-txt">
                        <h4> <a href="#">Save World’s
                              Water Resources</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg3.jpg" alt=""></div>
                     <div class="ser-txt">
                        <h4> <a href="#">Recycling & Waste
                              Management</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg4.jpg" alt=""></div>
                     <div class="ser-txt">
                        <h4> <a href="#">Save Plants &
                              Forest Planting</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
               <!--Services Box Start-->
               <div class="ser-col">
                  <div class="ser-box">
                     <div class="ser-thumb"><a href="#"><i class="fas fa-link"></i></a> <img src="/images/serimg5.jpg" alt=""></div>
                     <div class="ser-txt">
                        <h4> <a href="#">Implement Solar
                              & Wind Energies</a>
                        </h4>
                        <span class="aicon"><i class="fas fa-arrow-right"></i></span>
                     </div>
                  </div>
               </div>
               <!--Services Box End-->
            </div>
         </div>
         <!-- <div class="load-more text-center w-100"> <a href="#" class="lm">View More Work</a> </div> -->
      </section>
      <!--Services Slider End-->

      <!--Activities Gallery Section Start-->
      <section class="agallery gallery wf100 p80">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <!--title start-->
                  <div class="section-title">
                     <strong>Our Latest</strong>
                     <h2>Activities Gallery</h2>
                  </div>
                  <!--title end-->
               </div>
               <div class="col-lg-7">
                  <ul class="flinks">
                     <li><a data-filter="*" href="#" title="">Show All</a></li>
                     <li><a data-filter=".f-cat1" href="#" title="">Wildlife</a></li>
                     <li><a data-filter=".f-cat2" href="#" title="">Water Resources</a></li>
                     <li><a data-filter=".f-cat3" href="#" title="">Solar Energy</a></li>
                     <li><a data-filter=".f-cat4" href="#" title="">Recycling</a></li>
                  </ul>
               </div>
            </div>
            <div class="gallery-inner masonry">
               <div class="row">
                  <ul>
                     <li class="col-md-3 col-sm-6 f-cat f-cat1 f-cat4"><span><a href="images/agallery1.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a> <img src="/images/agallery1.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat2 f-cat3"><span> <a href="images/agallery2.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery2.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat1"><span> <a href="images/agallery3.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a> <img src="/images/agallery3.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat4 f-cat2"><span> <a href="images/agallery4.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery4.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat1"><span> <a href="images/agallery5.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery5.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat2"><span> <a href="images/agallery6.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery6.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat3 f-cat2"><span> <a href="images/agallery7.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery7.jpg" alt=""></span> </li>
                     <li class="col-md-3 col-sm-6 f-cat f-cat4"><span> <a href="images/agallery8.jpg" data-rel="prettyPhoto[gallery]"> <i class="fas fa-search"></i> </a><img src="/images/agallery8.jpg" alt=""></span> </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--Activities Gallery Section End-->

      <!--Current Promises Section Start-->
      <section class="wf100 p80 text-center">
         <div class="shadow-lg rounded container">
            <h3 class="text-center pt-3">Your Achievments</h3>
            <div class="row p-5">
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Client Satisfcation</h6>
                        <p class="counter-count">400</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Wasted Recycle</h6>
                        <p class="counter-count">300</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>Collection Partners</h6>
                        <p class="counter-count">100</p>
                     </li>
                  </ul>
               </div>
               <div class="col-md-3">
                  <ul class="counter">
                     <li class="ml-5">
                        <h6>City Serving</h6>
                        <p class="counter-count">500</p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--Current Promises Section End-->

      <!--Contact Start-->
      <section class=" shadow-lg mt-5 mb-5 contact-page wf100 p80" id="ContactUs">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="contact-form">
                     <h3 class="text-black">Feel Free to Contact us.</h3>
                     <ul class="cform">
                        <li class="half pr-15">
                           <input type="text" class="form-control" placeholder="Full Name">
                        </li>
                        <li class="half pl-15">
                           <input type="text" class="form-control" placeholder="Email">
                        </li>
                        <li class="half pr-15">
                           <input type="text" class="form-control" placeholder="Contact">
                        </li>
                        <li class="half pl-15">
                           <input type="text" class="form-control" placeholder="Subject">
                        </li>
                        <li class="full">
                           <textarea class="textarea-control" placeholder="Message"></textarea>
                        </li>
                        <li class="full">
                           <input type="submit" value="Contact us" class="fsubmit">
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="google-map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11418.310112375979!2d-74.00986187433132!3d40.710981182716246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1540972202179"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Contact End-->

      <!--Partner Logos Section Start-->
      <div class="partner-logos wf100 mb80">
         <div class="container">
            <div id="partner-logos" class="owl-carousel owl-theme">
               <div class="item"><img src="/images/plogo1.png" alt=""></div>
               <div class="item"><img src="/images/plogo2.png" alt=""></div>
               <div class="item"><img src="/images/plogo3.png" alt=""></div>
               <div class="item"><img src="/images/plogo4.png" alt=""></div>
               <div class="item"><img src="/images/plogo5.png" alt=""></div>
               <div class="item"><img src="/images/plogo1.png" alt=""></div>
               <div class="item"><img src="/images/plogo2.png" alt=""></div>
               <div class="item"><img src="/images/plogo3.png" alt=""></div>
               <div class="item"><img src="/images/plogo4.png" alt=""></div>
               <div class="item"><img src="/images/plogo5.png" alt=""></div>
            </div>
         </div>
      </div>
      <!--Partner Logos Section End-->
      <!--Footer Start-->
      <footer class="footer-style-2">
         <div class="footer-top wf100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <!--Footer Widget Start-->
                     <div class="footer-widget about-ecova">
                        <div class="f2logo"> <img src="/images/f2logo.png" alt=""> </div>
                        <p>We are Ecova: eco & environmental community. We need your support and help to Stop Globar
                           Warning. Few generations ago it to seemed like the world’s resources were infinite, and the
                           people needed only to access them to create business, Lorem ipsum dolor it amet consect
                           adipiscing.</p>
                        <a href="#" class="more">More About Ecova</a>
                     </div>
                     <!--Footer Widget End-->
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <!--Footer Widget Start-->
                     <div class="footer-widget">
                        <h5>Current Projects</h5>
                        <ul class="quick-links">
                           <li> <a href="#">Waste Management</a></li>
                           <li><a href="#">Solar Energy</a></li>
                           <li><a href="#">Eco Ideas</a></li>
                           <li><a href="#">Recycling Materials</a></li>
                           <li><a href="#">Plant Ecology</a></li>
                           <li><a href="#">Saving Wildlife </a></li>
                        </ul>
                     </div>
                     <!--Footer Widget End-->
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <!--Footer Widget Start-->
                     <div class="footer-widget">
                        <h5>Tags</h5>
                        <ul class="ftags">
                           <li><a href="#">Solar Energy</a></li>
                           <li><a href="#">Plant Ecology</a></li>
                           <li><a href="#">Wildlife</a></li>
                           <li><a href="#">Eco Ideas</a></li>
                           <li><a href="#">Waste Management</a></li>
                           <li><a href="#">Water</a></li>
                           <li><a href="#">Forest Planting</a></li>
                           <li><a href="#">Donation</a></li>
                           <li><a href="#">Wind Energy</a></li>
                           <li><a href="#">Recycling</a></li>
                        </ul>
                     </div>
                     <!--Footer Widget End-->
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <!--Footer Widget Start-->
                     <div class="footer-widget">
                        <h5>Latest Posts</h5>
                        <ul class="lastest-products">
                           <li> <img src="/images/flp1.jpg" alt=""> <strong><a href="#">How you can keep alive wild
                                    animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September,
                                 2018</span> </li>
                           <li> <img src="/images/flp2.jpg" alt=""> <strong><a href="#">Eliminate your plastic bottle
                                    pollution & keep...</a></strong> <span class="pdate"><i>Posted:</i> 29 September,
                                 2018</span> </li>
                           <li> <img src="/images/flp3.jpg" alt=""> <strong><a href="#">How you can keep alive wild
                                    animals for...</a></strong> <span class="pdate"><i>Posted:</i> 29 September,
                                 2018</span> </li>
                        </ul>
                     </div>
                     <!--Footer Widget End-->
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-newsletter wf100">
            <div class="container">
               <div class="row">
                  <div class="col-lg-7">
                     <div class="newsletter">
                        <strong>Join our Newsletter</strong>
                        <ul>
                           <li>
                              <input type="text" placeholder="Your Name">
                           </li>
                           <li>
                              <input type="text" placeholder="Your Email">
                           </li>
                           <li>
                              <input type="submit" value="Subscribe">
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="footer-social"> <strong>Get Connect</strong> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> <a href="#"><i class="fab fa-youtube"></i></a> </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyr wf100">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-sm-8">
                     <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--Footer End-->
      <nav class="sidenav">
         <ul class="main marginright">
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/location">Change Location</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/orders">My Orders</a></li>
            <!-- <li><a href="#">Wallet</a></li>
            <li><a href="#">Notifications</a></li>
            <li><a href="#">Refer & Earn</a></li> -->
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="/logout">Logout</a></li>
         </ul>
      </nav>
      <div class="overlay"></div>
   </div>
   <!--   JS Files Start  -->
   <script src="/js/jquery-3.3.1.min.js"></script>
   <script src="/js/jquery-migrate-1.4.1.min.js"></script>
   <script src="/js/popper.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <script src="/js/owl.carousel.min.js"></script>
   <script src="/js/jquery.prettyPhoto.js"></script>s
   <script src="/js/isotope.min.js"></script>
   <script src="/js/slick.min.js"></script>
   <script src="/js/custom.js"></script>
   <script src="/js/scroll.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init({
         offset: 100,
         duration: 1000,
      });
   </script>

</body>


</html>