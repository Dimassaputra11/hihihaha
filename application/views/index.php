<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>The Lucky Hotel</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url(''); ?>assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?= base_url(''); ?>assets/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS --
      >
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="images/logo.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Room</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog.html">Contact</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                        </li>
                     </ul>
                     <div class="call_section">
                        <ul>
                           <li><a href="#"><img src="<?= base_url(''); ?>assets/images/fb-icon.png"></a></li>
                           <li><a href="#"><img src="<?= base_url(''); ?>assets/images/twitter-icon.png"></a></li>
                           <li><a href="#"><img src="<?= base_url(''); ?>assets/images/linkedin-icon.png"></a></li>
                           <li><a href="#"><img src="<?= base_url(''); ?>assets/images/instagram-icon.png"></a></li>
                           <div class="donate_bt"><a href="#"><img src="<?= base_url(''); ?>assets/images/search-icon.png"></a></div>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">The Lucky Hotel</h1>
                              <p class="banner_text">Booking Hotel Murah Dengan Fasilitas Mewah</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="<?= base_url(''); ?>assets/images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">The Lucky Hotel</h1>
                              <p class="banner_text">Masih Bingung Cari Hotel Murah Tapi Tidak Murahan</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="<?= base_url(''); ?>assets/images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">The Lucky Hotel</h1>
                              <p class="banner_text">Langsung Booking No Ribet-Ribet</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <div class="quote_bt"><a href="#">Get A Quote</a></div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="<?= base_url(''); ?>assets/images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Fasilitas</span> Hotel</h1>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="<?= base_url(''); ?>assets/images/00.jpg" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="<?= base_url(''); ?>assets/images/3.jpg" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="<?= base_url(''); ?>assets/images/2.jpg" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="image_main">
                        <img src="<?= base_url(''); ?>assets/images/mm.jpg" class="image_8" style="width:100%">
                        <div class="text_main">
                           <div class="seemore_text"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">View Hotel</h1>
            <p class="news_text">The Lucky Hotel memliki view yang indah dengan menghadap langsung ke arah pantai, cocok buat anda yang lagi bersantai sambil menikmati sunrise & sunset</p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                  <img src="<?= base_url(''); ?>assets/images/kl.jpg" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
                  <div class="col-md-6">
                     <img src="<?= base_url(''); ?>assets/images/lk.jpg" class="image_6" style="width:100%">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Akomodasi</h1>
            <p class="news_text">The Lucky Hotel Dirancang untuk melampaui standar dan layanan bintang lima, hotel ini menawarkan akomodasi luar biasa yang terdiri dari 380 kamar tamu dan suite yang luas, termasuk rangkaian akomodasi 'hotel di dalam hotel' eksklusif hotel. Tempat tidur mewah, kamar mandi terinspirasi spa Jepang yang elegan, dan fasilitas yang cermat, semuanya menciptakan suasana yang tidak rumit yang menawarkan aksesibilitas, kemudahan, dan kenyamanan dalam akomodasi mewah.</p>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <img src="<?= base_url(''); ?>assets/images/ee.jpg" class="image_7" style="width:100%">
                  </div>
                  <div class="col-md-6">
                     <h4 class="classes_text">Penawaran</h4>
                     <p class="ipsum_text">The Lucky Hotel menawarkan paket pilihan dan promosi khusus yang dirancang untuk memberikan momen luar biasa bagi para Tamu kami. </p>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="client_taital">Event</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="<?= base_url(''); ?>assets/images/dd.jpg" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name"></h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Event</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="<?= base_url(''); ?>assets/images/bb.jpg" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name"></h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Event</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="<?= base_url(''); ?>assets/images/cc.jpg" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name"></h3>
                           <p class="client_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital"><br> Informasi </h1>
               <div class="get_quote_bt"><a href="#">Read More</a></div>
            </div>
            <p class="dolor_text">The Lucky Hotel Dirancang untuk melampaui standar dan layanan bintang lima, memiliki 10 cabang di seluruh dunia diantaranya, Indonesia, Singapura, Autralia, Malaysia, dan China.</p>
         </div>
      </div>
      <!-- newsletter section end -->

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_left0">
                  <div class="mail_section">
                     <div class="contact_img">
                        <h1 class="contact_taital"></h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main"><img src="<?= base_url(''); ?>assets/images/map-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="subscribe_bt"><a href="#">Youtube</a></div>
            <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="<?= base_url(''); ?>assets/images/call-icon1.png"><span class="padding_left_15">Phone +01 9876543210</span></a></div>
                     <div class="call_text"><a href="#"><img src="<?= base_url(''); ?>assets/images/mail-icon1.png"><span class="padding_left_15">Theluckyhotel@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">Informasi</h4>
                        <p class="many_text">The Lucky Hotel Tempat tidur mewah, kamar mandi terinspirasi spa Jepang yang elegan</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="services.html">Room</a></li>
                              <li><a href="blog.html">Contack</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="<?= base_url(''); ?>assets/images/"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?= base_url(''); ?>assets/js/jquery.min.js"></script>
      <script src="<?= base_url(''); ?>assets/js/popper.min.js"></script>
      <script src="<?= base_url(''); ?>assets/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url(''); ?>assets/js/jquery-3.0.0.min.js"></script>
      <script src="<?= base_url(''); ?>assets/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="<?= base_url(''); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?= base_url(''); ?>assets/js/custom.js"></script>
      <!-- javascript --> 
      <script src="<?= base_url(''); ?>assets/js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

