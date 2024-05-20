<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FragranceForte</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
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
                    <li class="top_links">
                    <li class="top_links">
                        <a href="#">
                            <i class="fa fa-user"></i>
                        </a>
                        <ul class="dropdown_links">
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

            <div class="header_right_info">
                <ul>

                    <li class="mini_cart_wrapper">
                        <a href="javascript:void(0)">
                            <i class="fa fa-shopping-cart"></i>

                        </a>
                        <div class="mini_cart mini_cart2">
                            <div class="cart_gallery">
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="{{ asset('images/mini1.png') }}" alt="Perfume"></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Hugo Boss</a>
                                        <p><span>₱4,800.00</span></p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="cart_item">
                                    <div class="cart_img">
                                        <a href="#"><img src="{{ asset('small-product/mini2.png') }}" alt="Perfume"></a>
                                    </div>
                                    <div class="cart_info">
                                        <a href="#">Bvlgari</a>
                                        <p><span>₱5,350.00</span></p>
                                    </div>
                                    <div class="cart_remove">
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mini_cart_table">
                                <div class="cart_table_border">
                                    <div class="cart_total mt-10">
                                        <span>Total :</span>
                                        <span class="price">{{$totalPrice}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mini_cart_footer">
                                <div class="cart_button">
                                    <a href="{{route('cart.index')}}">View Cart</a>
                                </div>

                                <form action="{{ route('placeorder') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="cart_button">Place Order</button>
                                </form>
                            </div>
                        </div>
                        <!-- mini cart ends here -->
                    </li>
                </ul>
            </div>


            <div id="menu" class="text-left">
                <ul class="offcanvas_main_menu">
                    <li class="menu-item-has-children active">
                    <a href="{{route("home")}}" class="active">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                    </li>

                    <li class="menu-item-has-children">
                    <li><a href="#">My Account</a></li>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route("about")}}">About Us</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">User <i class="fa fa-angle-down"></i></a>
                        <ul class="sub_menu pages">
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

            <div class="offcanvas_footer">
                <span><a href="#"><i class="fa fa-envelope-0"></i>paulalouisser@gmail.com</a></span>
                <ul>
                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
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

                                        <li class="mini_cart_wrapper">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-shopping-cart"></i>
                                                <span class="item_count">{{$itemCount}}</span>
                                            </a>

                                            <!-- mini cart  -->
                                            <div class="mini_cart mini_cart2">
                                                <div class="mini_cart_footer">
                                                    <div class="cart_button">
                                                        <a href="{{route('cart.index')}}">View Cart</a>
                                                    </div>
                                                </div>
                                                <div class="cart_gallery">
                                                    @foreach ($cartItems as $item)
                                                        <div class="cart_item">
                                                            <div class="cart_img">
                                                                <img src="{{ asset('storage/' . $item->fragrance->image) }}"
                                                                    alt="Perfume">
                                                            </div>
                                                            <div class="cart_info">
                                                                <p>{{$item->fragrance->fragrance_name}}</p>
                                                                <p><span>{{$item->fragrance->price}}</span></p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="mini_cart_table">
                                                    <div class="cart_table_border">
                                                        <div class="cart_total mt-10">
                                                            <span>Total :</span>
                                                            <span class="price">{{$totalPrice}}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mini cart ends -->
                                        </li>
                                    </ul>
                                </div>
                                <div class="header_account">
                                    <ul>
                                        <li class="top_links">
                                        <li class="top_links">
                                            <a href="#">
                                                <i class="fa fa-user"></i>
                                            </a>
                                            <ul class="dropdown_links">
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
    </header>


    <!-- slider section starts  -->
    <section class="slider_section slider_section2 mb-66">
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('images/slider1.jpg') }}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 col-md-6 offset-md-6">
                            <div class="slider_content slider_content2 content_right">
                                <h1>Men's Collection</h1>
                                <h2>Wild Stone</h2>
                                <p>The rich aromatic notes of rosemary and nerolu combined with the sophistication of
                                    tonka beans and white beans and white woods to create the perfect accompaniment for
                                    the suited look.</p>
                                <a href="#product_catalog" class="button">Shop Now <i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('images/slider2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_content slider_content2 content_left">
                                <h1>Watch</h1>
                                <h2>Maison Micallef</h2>
                                <p>This perfume is a wonderful elixir that heightens both the scents of gourmet Bourbon
                                    vanilla and those refined of tuberose and jasmine. The delightful alliance reminds
                                    of tropical paradise.</p>
                                <a href="#product_catalog" class="button">Shop Now <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- product area starts -->


    <div class="product_area product_area_two mb-65" id="product_catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Product Catalog</h2>
                        <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a href="#Men" class="active" data-toggle="tab" role="tab" aria-controls="Men"
                                        aria-selected="true">
                                        Men
                                    </a>
                                </li>
                                <li>
                                    <a href="#Women" data-toggle="tab" role="tab" aria-controls="Women"
                                        aria-selected="false">
                                        Women
                                    </a>
                                </li>
                                <li>
                                    <a href="#Unisex" data-toggle="tab" role="tab" aria-controls="Unisex"
                                        aria-selected="false">
                                        Unisex
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Men" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach ($fragrances_male as $fragrance_male)
                                <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_male->image) }}" alt=""></a>
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_male->image2) }}" alt=""></a>
                                                </a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart">
                                                            <a href="#" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="quick_button">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#fragrance{{$fragrance_male->id}}"
                                                                title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">{{$fragrance_male->fragrance_name}}</a>
                                                </h4>

                                                <div class="price_box">
                                                    <!-- <span class="old_price">₱4,349.00</span> -->
                                                    <span class="current_price">{{$fragrance_male->price}}</span>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Women" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach ($fragrances_female as $fragrance_female)                            
                                                                                            <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_female->image) }}" alt="">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_female->image2) }}" alt="">
                                                </a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart">
                                                            <a href="#" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="quick_button">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#fragrance{{$fragrance_female->id}}"
                                                                title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">{{$fragrance_female->fragrance_name}}</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="current_price">{{$fragrance_female->price}}</span>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Unisex" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_column4 owl-carousel">
                            @foreach ($fragrances_unisex as $fragrance_unisex)
                                <div class="col-lg-3">
                                    <article class="single_product">
                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_unisex->image) }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('storage/' . $fragrance_unisex->image) }}">
                                                </a>
                                                <div class="action_links">
                                                    <ul>
                                                        <li class="add_to_cart">
                                                            <a href="#" title="Add to Cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </a>
                                                        </li>

                                                        <li class="quick_button">
                                                            <a href="#" data-toggle="modal"
                                                                data-target="#fragrance{{$fragrance_unisex->id}}"
                                                                title="Quick View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">{{$fragrance_unisex->fragrance_name}}</a>
                                                </h4>

                                                <div class="price_box">
                                                    <span class="current_price">{{$fragrance_unisex->price}}</span>
                                                </div>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                </div>
                            @endforeach        
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($fragrances_male as $fragrance_male)
                <div class="modal fade" id="fragrance{{$fragrance_male->id}}" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" data-dismiss="modal" aria-label="close" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="modal_tab">
                                                <div class="tab-content product-details-large">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_male->image) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_male->image2) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_male->image3) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_male->image4) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal_tab_button">
                                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                                        <li>
                                                            <a href="#tab1" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab1" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_male->image) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab2" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_male->image2) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab3" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_male->image3) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab4" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_male->image4) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="modal_right">
                                                <div class="modal_title mb-10">
                                                    <h2>{{$fragrance_male->fragrance_name}}</h2>
                                                </div>
                                                <div class="modal_price mb-10">
                                                    <!-- <span class="new_price">₱3,949.00</span> -->
                                                    <span class="old_price">{{$fragrance_male->price}}</span>
                                                </div>
                                                <div class="modal_description mb-15">
                                                    <p>{{$fragrance_male->fragrance_description}}
                                                        <br><br>
                                                        <strong>INGREDIENTS:</strong><br><br>
                                                        {{$fragrance_male->ingredients}}
                                                    </p>
                                                </div>
                                                <div class="variants_selects">
                                                    <div class="modal_add_to_cart">
                                                        <form action="{{route('cart.add', $fragrance_male->id)}}"
                                                            method="post">
                                                            @csrf
                                                            <input type="number" min="1" max="1" step="1" value="1">
                                                            <button type="submit">Add to cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal_social">
                                                    <h2>Follow us on</h2>
                                                    <ul>
                                                        <li class="facebook"><a
                                                                href="https://www.facebook.com/marketplace/item/3627871474202145/"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li class="twitter"><a href="https://twitter.com/InteractiveJag"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li class="pinterest"><a href="https://pin.it/7KwGMCJz0"><i
                                                                    class="fa fa-pinterest"></i></a></li>
                                                        <li class="instagram"><a
                                                                href="https://www.instagram.com/perfumegalleryuae/p/CxCmqmgJJnL/"><i
                                                                    class="fa fa-instagram"></i></a></li>
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
            @endforeach
            @foreach ($fragrances_female as $fragrance_female)
                <div class="modal fade" id="fragrance{{$fragrance_female->id}}" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" data-dismiss="modal" aria-label="close" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="modal_tab">
                                                <div class="tab-content product-details-large">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_female->image) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_female->image2) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_female->image3) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_female->image4) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal_tab_button">
                                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                                        <li>
                                                            <a href="#tab1" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab1" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_female->image) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab2" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_female->image2) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab3" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_female->image3) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab4" aria-selected="false">
                                                                <img src="{{ asset('storage/' . $fragrance_female->image4) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="modal_right">
                                                <div class="modal_title mb-10">
                                                    <h2>{{$fragrance_female->fragrance_name}}</h2>
                                                </div>
                                                <div class="modal_price mb-10">
                                                    <span class="new_price">{{$fragrance_female->price}}</span>
                                                    <!-- <span class="old_price">{{$fragrance_female->price}}</span> -->
                                                </div>
                                                <div class="modal_description mb-15">
                                                    <p>{{$fragrance_female->fragrance_description}}
                                                        <br><br>
                                                        <strong>INGREDIENTS:</strong><br><br>
                                                        {{$fragrance_female->ingredients}}
                                                    </p>
                                                </div>
                                                <div class="variants_selects">
                                                    <div class="modal_add_to_cart">
                                                        <form action="{{route('cart.add', $fragrance_female->id)}}"
                                                            method="post">
                                                            @csrf
                                                            <input type="number" min="1" max="1" step="1" value="1">
                                                            <button type="submit">Add to cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal_social">
                                                    <h2>Follow us on</h2>
                                                    <ul>
                                                        <li class="facebook"><a
                                                                href="https://www.facebook.com/marketplace/item/3627871474202145/"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li class="twitter"><a href="https://twitter.com/InteractiveJag"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li class="pinterest"><a href="https://pin.it/7KwGMCJz0"><i
                                                                    class="fa fa-pinterest"></i></a></li>
                                                        <li class="instagram"><a
                                                                href="https://www.instagram.com/perfumegalleryuae/p/CxCmqmgJJnL/"><i
                                                                    class="fa fa-instagram"></i></a></li>
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
            @endforeach
            @foreach ($fragrances_unisex as $fragrance_unisex)
                <div class="modal fade" id="fragrance{{$fragrance_unisex->id}}" tabindex="-1" role="dialog"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" data-dismiss="modal" aria-label="close" class="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal_body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12">
                                            <div class="modal_tab">
                                                <div class="tab-content product-details-large">
                                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_unisex->image) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_unisex->image2) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_unisex->image3) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                                        <div class="modal_tab_img">
                                                            <a href="#"><img
                                                                    src="{{ asset('storage/' . $fragrance_unisex->image4) }}"
                                                                    alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal_tab_button">
                                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                                        <li>
                                                            <a href="#tab1" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab1" aria-selected="false">
                                                                <img src="re{{ asset('storage/' . $fragrance_unisex->image) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab2" class="nav-link active" data-toggle="tab"
                                                                role="tab" aria-controls="tab2" aria-selected="false">
                                                                <img src="re{{ asset('storage/' . $fragrance_unisex->image2) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab3" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab3" aria-selected="false">
                                                                <img src="re{{ asset('storage/' . $fragrance_unisex->image3) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab4" class="nav-link" data-toggle="tab" role="tab"
                                                                aria-controls="tab4" aria-selected="false">
                                                                <img src="re{{ asset('storage/' . $fragrance_unisex->image4) }}"
                                                                    alt="">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 col-md-7 col-sm-12">
                                            <div class="modal_right">
                                                <div class="modal_title mb-10">
                                                    <h2>{{$fragrance_unisex->fragrance_name}}</h2>
                                                </div>
                                                <div class="modal_price mb-10">
                                                    <span class="new_price">{{$fragrance_unisex->price}}</span>
                                                    <!-- <span class="old_price">{{$fragrance_unisex->price}}</span> -->
                                                </div>
                                                <div class="modal_description mb-15">
                                                    <p>{{$fragrance_unisex->fragrance_description}}
                                                        <br><br>
                                                        <strong>INGREDIENTS:</strong><br><br>
                                                        {{$fragrance_unisex->ingredients}}
                                                    </p>
                                                </div>
                                                <div class="variants_selects">
                                                    <div class="modal_add_to_cart">
                                                        <form action="{{route('cart.add', $fragrance_unisex->id)}}"
                                                            method="post">
                                                            @csrf
                                                            <input type="number" min="1" max="1" step="1" value="1">
                                                            <button type="submit">Add to cart</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal_social">
                                                    <h2>Follow us on</h2>
                                                    <ul>
                                                        <li class="facebook"><a
                                                                href="https://www.facebook.com/marketplace/item/3627871474202145/"><i
                                                                    class="fa fa-facebook"></i></a></li>
                                                        <li class="twitter"><a href="https://twitter.com/InteractiveJag"><i
                                                                    class="fa fa-twitter"></i></a></li>
                                                        <li class="pinterest"><a href="https://pin.it/7KwGMCJz0"><i
                                                                    class="fa fa-pinterest"></i></a></li>
                                                        <li class="instagram"><a
                                                                href="https://www.instagram.com/perfumegalleryuae/p/CxCmqmgJJnL/"><i
                                                                    class="fa fa-instagram"></i></a></li>
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
            @endforeach
        </div>
    </div>


    <!-- product area ends -->


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

    <!-- home section area starts  -->

    <div class="home_section_two color_two mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="home_section_left">
                        <!-- deals product area starts -->

                        <div class="deals_product_area mb-68">
                            <div class="section_title section_title_style2">
                                <h2>Hot Deals</h2>
                            </div>
                            <div class="row">
                                <div class="deals_carousel product_column1 owl-carousel">
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Unisex 1-1.png') }}">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Unisex 1-1.png') }}">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box37" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2024/5/22"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Ajmal Unisex Oudesiere Oriental</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱21,310.00</span>
                                                        <span class="current_price">₱16,950.00</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>

                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 5-1.png') }}">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 5-1.png') }}">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box38" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2024/5/20"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Carolina Herrera Women Good Girl</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱9,900.00</span>
                                                        <span class="current_price">₱7,750.00</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>

                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Men 4-1.png') }}">
                                                    </a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Men 4-2.png') }}">
                                                    </a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box39" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <!-- for deals timing -->
                                                    <div class="product_timing">
                                                        <div data-countdown="2024/5/20"></div>
                                                    </div>
                                                    <h4 class="product_name">
                                                        <a href="#">Dunhill Men Icon Elite</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱5,299.00</span>
                                                        <span class="current_price">₱3,899.00</span>
                                                    </div>

                                                </figcaption>
                                            </figure>

                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- deals product area ends -->

                        <!-- small product area starts -->

                        <div class="small_product_area mb-68">
                            <div class="section_title section_title_style2">
                                <h2>Best Sellers</h2>
                            </div>
                            <div class="small_product_container sidebar_product_column1 owl-carousel">
                                <div class="small_product_list">
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/1-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/1-2.png') }}" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Jaguar Men Classic EDT</a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">₱4,349.00</span>
                                                    <span class="current_price">₱3,949.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/Men 5-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/Men 5-2.png') }}" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Paco Rabbane Men Invictus</a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">₱6,500.00</span>
                                                    <span class="current_price">₱5,095.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/Unisex 2-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/Unisex 2-2.png') }}" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">L'Occitane en Provance</a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">₱4,000.00</span>
                                                    <span class="current_price">₱3,300.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>

                                <div class="small_product_list">
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/Men 4-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/Men 4-2.png') }}" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Lattafa unisex Mahir EDP</a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">₱5,100.00</span>
                                                    <span class="current_price">₱3,179.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>
                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/Unisex 4-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/Unisex 4-2.png') }}" alt=""></a>
                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Calvin Klein Unisex One Summer</a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">₱3,000.00</span>
                                                    <span class="current_price">₱2,500.00</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                    <article class="single_product">


                                        <figure>
                                            <div class="product_thumb">
                                                <a href="#" class="primary_img">
                                                    <img src="{{ asset('images/B6-1.png') }}">
                                                </a>
                                                <a href="#" class="secondary_img">
                                                    <img src="{{ asset('images/B6-2.png') }}"> alt=""></a>

                                            </div>
                                            <figcaption class="product_content">
                                                <h4 class="product_name">
                                                    <a href="#">Dloce & Gabbana Women </a>
                                                </h4>
                                                <div class="product_rating">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="price_box">
                                                    <span class="old_price">Rs. 7499</span>
                                                    <span class="current_price">Rs. 7200</span>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </article>

                                </div>
                            </div>
                        </div>

                        <!-- small product area ends -->

                        <!-- testimonial section starts  -->

                        <div class="testimonial_style_two mb-60">
                            <div class="testimonial_container">
                                <div class="section_title section_title_style2">
                                    <h2>Testimonial</h2>
                                </div>
                                <div class="testimonial_sidebar_carousel owl-carousel">
                                    <div class="single_testimonial">
                                        <div class="testimonial_img">
                                            <a href="#"><img src="{{ asset('images/testimonial1.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <h4><a href="#">Rosemarie Tajay</a></h4>
                                            <p>I absolutely love shopping at FragranceForte. Their selection is
                                                top-notch and really enhances my style with a touch of sophistication
                                                and charm. The customer service is always on point and makes me feel
                                                like a valued customer. Every purchase feels special and memorable,
                                                rather than just a simple transaction. And when I'm in the mood for
                                                something delicate like Coach Women Floral Blush, FragranceForte always
                                                comes through with their commitment to excellence and luxury.</p>
                                        </div>
                                    </div>
                                    <div class="single_testimonial">
                                        <div class="testimonial_img">
                                            <a href="#"><img src="{{ asset('images/testimonial2.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <h4><a href="#">Christopher John</a></h4>
                                            <p>With a refined taste for the finer things, I've discovered my signature
                                                scent in FragranceForte. Its rare ingredients blend harmoniously to
                                                create a captivating symphony of aromas that delights the senses.
                                                The fact that it's an original fragrance adds to its charm, boosting my
                                                confidence and refinement with each application.

                                            </p>
                                        </div>
                                    </div>
                                    <div class="single_testimonial">
                                        <div class="testimonial_img">
                                            <a href="#"><img src="{{ asset('images/testimonial3.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="testimonial_content">
                                            <h4><a href="#">Ella Reyes</a></h4>
                                            <p>Using Versace Women Eros is like entering a world of sophistication and
                                                allure. Every spritz transports me to a realm of luxury and elegance.
                                                However, since discovering FragranceForte's exclusive collection, I've
                                                found a new level of originality and refinement.
                                                The enchanting scent leaves a unique trail wherever I go, making a
                                                statement of opulence that reflects my style.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- testimonial section ends -->

                        <!-- Feedbacks letter section starts -->

                        <div class="newsletter_style2">
                            <div class="newsletter_container">
                                <div class="section_title section_title_style2">
                                    <h2>Feedbacks <i class='bx bxs-envelope'></i></h2>

                                </div>
                                <div class="subscribe_form">
                                    <form>
                                        <input type="email" autocomplete="off" placeholder="paulalouisser@gmail.com">
                                        <button>
                                            <i class="fa fa-envelope-o"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="newsletter_content">
                                    <p>Sign up to get news and get 25% off instantly.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Feedbacks letter section ends -->

                    </div>
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="home_section_right">
                        <!-- product area starts  -->

                        <div class="product_area mb-65">
                            <div class="section_title section_title_style2">
                                <h2>New Arrival</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 6-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 6-2.png') }}" alt=""></a>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box19" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#"> Jean Paul Gaultier Women Scandal </a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱6,700.00</span>
                                                        <span class="current_price">₱5,000.00</span>


                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 5-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 5-2.png') }}" alt=""></a>


                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box20" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Carolina Herrera Women Good Girl</a>


                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱9,900.00</span>
                                                        <span class="current_price">₱7,750.00</span>


                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 4-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 4-2.png') }}" alt=""></a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box21" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Versace Pour Femme Dylan Blue</a>

                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱5,409.00</span>
                                                        <span class="current_price">₱4,729.00</span>

                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Men 5-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Men 5-2.png') }}" alt=""></a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box22" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Paco Rabbane Men Invictus</a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱6,500.00</span>
                                                        <span class="current_price">₱5,095.00
                                                        </span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Unisex 3-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Unisex 3-2.png') }}" alt=""></a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box23" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Ajmal Unisex Perfume</a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱5,600.00</span>
                                                        <span class="current_price">₱4,900.00</span>

                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="col-lg-3">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Unisex 6-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Unisex 6-2.png') }}" alt=""></a>

                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="add_to_cart">
                                                                <a href="#" title="Add to Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </a>
                                                            </li>

                                                            <li class="quick_button">
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#modal_box24" title="Quick View">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#">Lattafa unisex Mahir EDP</a>
                                                    </h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">₱5,100.00</span>
                                                        <span class="current_price">₱3,179.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product area ends -->

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

                        <!-- product section starts  -->
                        <div class="product_area">
                            <div class="section_title section_title_style2">
                                <h2>On Sale</h2>
                            </div>
                            <div class="row">
                                <div class="product_carousel product_column3 owl-carousel">
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 4-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 4-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box25" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Calvin Klein Unisex One Summer</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱3,000.00</span>
                                                            <span class="current_price">₱2,500.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 2-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 2-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box26" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">L'Occitane en Provance</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱4,000.00</span>
                                                            <span class="current_price">₱3,300.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 5-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 5-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box27" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">The Body Shop Black Musk</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱3,500.00</span>
                                                            <span class="current_price">₱2,900.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 6-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 6-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box28" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Lattafa unisex Mahir EDP</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱5,100.00</span>
                                                            <span class="current_price">₱3,179.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Men 6-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Men 6-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box29" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Carolina Herrera Bad Boy</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱8,150.00</span>
                                                            <span class="current_price">₱5,900.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Women 1-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Women 1-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box30" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Dolce & Gabbana Women The Only</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱7,695.00</span>
                                                            <span class="current_price">₱5,694.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Women 2-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Women 2-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box31" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Michael Kors Women Sexy Amber</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱6,854.00 </span>
                                                            <span class="current_price">₱4,798.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Men 3-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Men 3-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box32" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">GIORGIO ARMANI Acqua Di Gio</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱9,419.00</span>
                                                            <span class="current_price">₱7,779.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Women 4-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Women 4-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box33" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Versace Pour Femme Dylan Blue</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱5,409.00</span>
                                                            <span class="current_price">₱4,729.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 1-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 1-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box34" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Ajmal Unisex Oudesiere Oriental</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱21,310.00</span>
                                                            <span class="current_price">₱16,950.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="product_items">
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/1-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/1-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box35" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Jaguar Men Classic EDT</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱4,349.00</span>
                                                            <span class="current_price">₱3,949.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                            <article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a href="#" class="primary_img">
                                                            <img src="{{ asset('images/Unisex 3-1.png') }}">
                                                        </a>
                                                        <a href="#" class="secondary_img">
                                                            <img src="{{ asset('images/Unisex 3-2.png') }}">
                                                        </a>

                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="add_to_cart">
                                                                    <a href="#" title="Add to Cart">
                                                                        <i class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="quick_button">
                                                                    <a href="#" data-toggle="modal"
                                                                        data-target="#modal_box36" title="Quick View">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <figcaption class="product_content">
                                                        <h4 class="product_name">
                                                            <a href="#">Ajmal Unisex Perfume</a>
                                                        </h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">₱5,600.00</span>
                                                            <span class="current_price">₱4,900.00</span>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </article>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- product section ends -->
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- home section area ends -->


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
                                    <p>Fragrance Forte is your ultimate destination for exquisite fragrances from
                                        renowned brands around the world. Our mission is to provide our customers with
                                        an unparalleled shopping experience, offering a wide range of luxury perfumes
                                        that cater to every taste and preference.</p>
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
                                        FragranceForte offers a variety of luxury perfumes from different brands, each
                                        carefully handpicked to indulge your senses. Our perfumes enhance your daily
                                        life with delicate floral scents and rich oriental blends, catering to a wide
                                        range of styles and moods. With our diverse selection, you're sure to find a
                                        scent that perfectly complements your unique personality.</p>
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
                                        Fragrance Forte­ is where fancy scents live­. It has perfumes from big brands
                                        all over the­ world. These perfume­s smell great! They are­ picked very
                                        carefully. The­ scents go with your style. Look through our perfume­s and find
                                        scents you love. Each one te­lls a fancy, elegant story. At Fragrance Forte­,
                                        smell luxury perfumes and fe­el amazing.
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
                                        We deeply appreciate our customers for choosing Fragrance Forte. Your support
                                        allows us to continue offering exquisite perfumes and exceptional service. Thank
                                        you for being part of our fragrance journey.
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
                                    <p>Get all types of perfume from us within 3 days delivery. To do that kindly send
                                        an email.</p>
                                </div>
                                <p>
                                    <span></i> Address :</span> Prk.1 Mudiang Davao City
                                </p>
                                <p><span></i> Email :</span> <a
                                        href="https://mail.google.com/mail/?view=cm&fs=1&to=paulalouisser@gmail.com">paulalouisser@gmail.com</a>
                                </p>
                                <p><span></i> Phone :</span> 09362628096</a></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widgets_container widgets_p_product">
                                <h3>Featured Products</h3>
                                <div class="small_product_container small_product_column1 owl-carousel">
                                    <div class="small_product_list">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/1-2.png') }}" alt=""></a>


                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Jaguar Men Classic EDT</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱4,349.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱3,949.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 1-2.png') }}" alt=""></a>


                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Dolce & Gabbana Women The Only
                                                        </a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="old_price">₱7,695.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱5,694.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Unisex 1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Unisex 1-2.png') }}" alt=""></a>

                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Ajmal Unisex Oudesiere
                                                            Oriental</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱21,310.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱16,950.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widgets_container widgets_p_product">
                                <h3>Most Viewed Products</h3>
                                <div class="small_product_container small_product_column1 owl-carousel">
                                    <div class="small_product_list">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/1-2.png') }}" alt=""></a>


                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Jaguar Men Classic EDT</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱4,349.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱3,949.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Women 1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Women 1-2.png') }}" alt=""></a>


                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Dolce & Gabbana Women The Only
                                                        </a>
                                                    </h4>
                                                    <div class="price_box">
                                                        <span class="old_price">₱7,695.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱5,694.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a href="#" class="primary_img">
                                                        <img src="{{ asset('images/Unisex 1-1.png') }}" alt=""></a>
                                                    <a href="#" class="secondary_img">
                                                        <img src="{{ asset('images/Unisex 1-2.png') }}" alt=""></a>
                                                </div>
                                                <figcaption class="product_content">
                                                    <h4 class="product_name">
                                                        <a href="#" style="color: white;">Ajmal Unisex Oudesiere
                                                            Oriental</a>
                                                    </h4>

                                                    <div class="price_box">
                                                        <span class="old_price">₱21,310.00</span>
                                                        <span class="current_price"
                                                            style="color: white;">₱16,950.00</span>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                    <div class="small_product_list">
                                        <article class="single_product">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
            <script src="countdown.js"></script>
            <script
                src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
            <script src="main.js"></script>

</body>

</html>