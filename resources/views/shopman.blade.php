<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Estore | Man's Clothing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/slicknav.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

</head>

<body>

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="{{ asset('/img/icon/header_icon.png') }}" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="">USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>+628 9701 467 81</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="/profile">Your Profile</a></li>
                                       <li><a href="/shop">Shopping</a></li>
                                       <li><a href="/cart">Cart</a></li>
                                       <li><a href="/checkout">Checkout</a></li>
                                   </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="/"><img src="{{ asset('/img/logo/logo.png') }}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="\">Home</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                   <li class="d-none d-lg-block"> <a href="/" class="btn header-btn">Your Profile</a></li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{ asset('/img/hero/category.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Men's Clothing</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    
    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset('/img/categori/product1.png') }}" alt="" class="img-fluid">
                                    <h3> <a href="#">Short Pants with Motifs</a> </h3>
                                    <p>Rp. 149.999</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset('/img/categori/product4.png') }}" alt="" class="img-fluid">
                                    <h3> <a href="#">Simple Minimal Grey Sweatshirt</a> </h3>
                                    <p>Rp. 139.999</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset('/img/categori/product5.png') }}" alt="" class="img-fluid">
                                    <h3> <a href="#">Short Joger Pants</a> </h3>
                                    <p>Rp. 79.999</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>We appreciate our customers that shop at Estore! To show our apreciation to you, we offer you a free shipping to all accross Indonesia!</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>We used the secure payment system so all of the payment details will be safe!</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Free Return</h6>
                            <p>You've changed your mind after the cloths arrive? Don't worry! We let you return that in 1x24 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Get promotions & updates!</h2>
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources credibly innovate granular internal .</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <footer>
        <!-- Footer Start-->
 <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{ asset('/img/logo/logo2_footer.png') }}" alt=""></a>
                            </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="/about">About</a></li>
                                   <li><a href="/contact">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>New Products</h4>
                               <ul>
                                   <li><a href="/shop/women">Women's Cloth</a></li>
                                   <li><a href="/shop/men"> Men's Cloth</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
                <!-- Footer bottom -->
                <div class="row">
                 <div class="col-xl-7 col-lg-7 col-md-7">
                     <div class="footer-copy-right">
                         <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>                   </div>
                 </div>
                  <div class="col-xl-5 col-lg-5 col-md-5">
                     <div class="footer-copy-right f-right">
                         <!-- social -->
                         <div class="footer-social">
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
            </div>
        </div>
 
        <!-- Footer End-->
    </footer>

<!-- JS here -->
        <!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        
        <!-- Jquery, Popper, Bootstrap -->
        <script src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('/js/popper.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <!-- Jquery Mobile Menu -->
        <script src="{{ asset('/js/jquery.slicknav.min.js') }}"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/js/slick.min.js') }}"></script>

        <!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('/js/wow.min.js') }}"></script>
        <script src="{{ asset('/js/animated.headline.js') }}"></script>
        <script src="{{ asset('/js/jquery.magnific-popup.js') }}"></script>

        <!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('/js/contact.js') }}"></script>
        <script src="{{ asset('/js/jquery.form.js') }}"></script>
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/js/mail-script.js') }}"></script>
        <script src="{{ asset('/js/jquery.ajaxchimp.min.js') }}"></script>
        
        <!-- Jquery Plugins, main Jquery -->    
        <script src="{{ asset('/js/plugins.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>

        <!-- swiper js -->
        <script src="{{ asset('/js/swiper.min.js') }}"></script>
            <!-- swiper js -->
        <script src="{{ asset('/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('/js/waypoints.min.js') }}"></script>


</body>

</html>