<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FragranceForte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="off_canvars_overlay"></div>

    <div class="offcanvas_menu offcanvas_two">
        <div class="canvas_open">
            <a href="javascript:void(0)"><i class="fa fa-bars"></i></a>
        </div>
        <div class="offcanvas_menu_wrapper">
            <div class="canvas_close">
                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
            </div>
            <div class="header_account">
                <ul>
                

                </ul>
            </div>

            <div class="header_right_info">
                <ul>
                    
                </ul>
            </div>


            <div id="menu" class="text-left">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                    <a href="{{route("home")}}" class="active">Home</a>
                    </li>
                    
                    <li class="menu-item-has-children">
                        <a href="#about_us">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">My Account</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">User</a>
                        <ul class="sub-menu pages">
                       <li><a href="{{ route('login') }}">Login</a></li>
                       <li><a href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope-0"></i>paulalouisser@gmail.com</a></span>
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>

    </div>


    <header>
        <div class="main_header header_transparent header-mobile-m">
            <div class="header_container sticky-header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('images/aroma.png') }}" alt=""></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <!-- main-menu starts -->
                            <div class="main_menu menu_two menu_position">
                                <nav>
                                    <ul>
                                        <li>
                                        <a href="{{route("home")}}" class="active">Home</a>

                                        </li>

                                        
                                        <li>
                                            <a href="#about_us">About Us</a>
                                        </li>
                                        <li><a href="#contact_us_section">Contact Us</a></li>
                                </nav>
                            </div>

                            <!-- main menu ends -->
                        </div>
                        <div class="col-lg-4">
    <div class="header_top_right">
        <div class="header_right_info">
            <ul>
                <!-- You can add any additional header info here -->
            </ul>
        </div>
        <div class="header_account">
            <ul>
                <li class="top_links">
                    <a href="#">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown_links">
                        <!-- Login -->
                        <li>
                            <a href="/login">
                                <i class="fas fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <!-- Sign Up -->
                        <li>
                            <a href="/register">
                                <i class="fas fa-user-plus"></i> Sign Up
                            </a>
                        </li>
                        <!-- Logout -->
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                        role="button">
                                        <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                                    </a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- slider section starts  -->
<section class="slider_section slider_section2 mb-66">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('images/slider4.jpg') }}">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                        <div class="slider_content slider_content2 content_right">
                            <h1>Luxurious</h1>
                            <h2>Fragrance
                                Forte</h2>
                            <p>Get ready to discover your perfect scent through an immersive experience that will tantalize your senses like never before. At Fragrance Forte offers the luxury of magnificent perfumes, each designed to fascinate and enchant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</section>

    </div>

    <!-- about us section starts  -->

    <section id="about_us" class="blog_section blog_two color_two mb-65">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="blog_carousel blog_column3 owl-carousel">
                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/blog1.jpg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                        Discover Your Signature Scent at FragranceForte
                                        </a>
                                    </h4>
                                    <p class="post_desc">
                                    <p>Fragrance Forte is your ultimate destination for exquisite fragrances from renowned brands around the world. Our mission is to provide our customers with an unparalleled shopping experience, offering a wide range of luxury perfumes that cater to every taste and preference.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/blog2.jpg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="">
                                         FragranceForte's Collection
                                        </a>
                                    </h4>
                                    <p class="post_desc">                    
                                    FragranceForte offers a variety of luxury perfumes from different brands, each carefully handpicked to indulge your senses. Our perfumes enhance your daily life with delicate floral scents and rich oriental blends, catering to a wide range of styles and moods. With our diverse selection, you're sure to find a scent that perfectly complements your unique personality.</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/blog3.jpg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                        Explore FragranceForte: Treat Your Senses
                                        </a>
                                    </h4>
                                    <p class="post_desc">
                                    Fragrance Forte­ is where fancy scents live­. It has perfumes from big brands all over the­ world. These perfume­s smell great! They are­ picked very carefully. The­ scents go with your style. Look through our perfume­s and find scents you love. Each one te­lls a fancy, elegant story. At Fragrance Forte­, smell luxury perfumes and fe­el amazing.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/blog4.jpg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                    <h4 class="post_title">
                                        <a href="#">
                                        Thank You for Choosing Fragrance Forte
                                        </a>
                                    </h4>
                                    <p class="post_desc">
                                    We deeply appreciate our customers for choosing Fragrance Forte. Your support allows us to continue offering exquisite perfumes and exceptional service. Thank you for being part of our fragrance journey.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us section ends -->

    <!-- Long banner area starts  -->
    <div class="banner_area banner_style_two mb-58">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/banner4.png') }}">

                                    </a>
                                    <div class="banner_content">
                                        <h3 style="color: tomato;">Sale up to </h3>
                                        <h2>45%</h2>
                                        <p>Versace</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Long Banner area ends -->

    <!-- banner area starts -->
    <div class="banner_area mb-66">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                                <img src="{{ asset('images/banner1.jpg') }}">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>50%</h2>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                            <img src="{{ asset('images/banner2.jpg') }}">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>70%</h2>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-4 col-md-4">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a href="#">
                            <img src="{{ asset('images/banner3.jpg') }}">
                            </a>
                            <div class="banner_content">
                                <h3>Sale up to</h3>
                                <h2>30%</h2>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area ends -->

    <footer id="contact_us_section" class="footer_widgets color_two">
    <footer class="footer_widgets color_two">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('images/aroma.png') }}" alt=""></a>
                        </div>
                        <div class="footer_desc">
                            <p>Get all types of perfume from us within 3 days delivery. To do that kindly send an email.</p>
                        </div>
                        <p>
                            <span></i> Address :</span> Prk.1 Mudiang Davao City
                        </p>
                        <p><span></i> Email :</span> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=paulalouisser@gmail.com">paulalouisser@gmail.com</a></p>
                        <p><span></i> Phone :</span> 09362628096</a></p>
                    </div>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="countdown.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="main.js"></script>

</body>

</html>