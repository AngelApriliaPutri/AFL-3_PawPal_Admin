<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="index, follow" />
    <title>PawPal</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/vendor/font.awesome.css')}}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('/css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" />

</head>

<body>

    <!-- Top Bar -->

    <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div>

    <!-- Top Bar -->
    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')

     <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title"> Friskies Seafood Sensation</a>
                            <span class="quantity-price">1 x <span class="amount">Rp 150.000</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title">Pedigree Meat Jerky</a>
                            <span class="quantity-price">1 x <span class="amount">Rp 25.000</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title">Gnawler Calcium Milk Bone Dental Snack</a>
                            <span class="quantity-price">1 x <span class="amount">Rp 20.000</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title"> Friskies Seafood Sensation</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title">Pedigree Meat Jerky</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product-variable" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product-variable" class="title">Gnawler Calcium Milk Bone Dental Snack</a>
                            <span class="quantity-price">1 x <span class="amount">Rp 20.000</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-variable">Product Single</a></li>
                                    <li><a href="single-product-variable-variable">Product Variable</a></li>
                                    <li><a href="single-product-variable-affiliate">Product Affiliate</a></li>
                                    <li><a href="single-product-variable-group">Product Group</a></li>
                                    <li><a href="single-product-variable-tabstyle-2">Product Tab 2</a></li>
                                    <li><a href="single-product-variable-tabstyle-3">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-variable-slider">Product Slider</a></li>
                                    <li><a href="single-product-variable-gallery-left">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-variable-gallery-right">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-variable-sticky-left">Product Sticky Left</a></li>
                                    <li><a href="single-product-variable-sticky-right">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart">Cart Page</a></li>
                                    <li><a href="checkout">Checkout Page</a></li>
                                    <li><a href="compare">Compare Page</a></li>
                                    <li><a href="wishlist">Wishlist Page</a></li>
                                    <li><a href="my-account">Account Page</a></li>
                                    <li><a href="login">Login & Register Page</a></li>
                                    <li><a href="empty-cart">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404">404 Page</a></li>
                                    <li><a href="privacy-policy">Privacy Policy</a></li>
                                    <li><a href="faq">Faq Page</a></li>
                                    <li><a href="coming-soon">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar">Grid Right Sidebar</a></li>
                            <li><a href="blog-single">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Your Products</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- breadcrumb-area end -->

    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p><span>12</span> Product Found of <span>30</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <a class="active" href="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </a>
                            <a href="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </a>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Relevance</option>
                                    <option value="1"> Name, A to Z</option>
                                    <option value="2"> Name, Z to A</option>
                                    <option value="3"> Price, low to high</option>
                                    <option value="4"> Price, high to low</option>
                                </select>
                            </div>
                            <a href="add-product">
                            <button class="AddProduct"> Add Product</button>
                            </a>
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('storage/p0001.jpeg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('storage/p0001.jpeg')}}" alt="Product" />
                                                        </a>
                                                        <a href="edit-product">
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </a>

                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Pedigree Adult Lamb & Vegetables
                                                            </a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Rp 76.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('storage/p0002.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('storage/p0002.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">
                                                            Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Pedigree Adult Lamb & Vegetables</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Rp 26.000</span>
                                                            <span class="old">Rp 30.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('storage/p0003.jpeg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('storage/p0003.jpeg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 0%"></span>
                                                            </span>
                                                            <span class="rating-num">( 0 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Royal Canin Adult Golden Retriever</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 1.179.000</span>
                                                            <span class="old">Rp 1.500.000 </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('storage/p0004.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('storage/p0004.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 70%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3.5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Gnawlers Calcium Milk Bone Dental Snack</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 20.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px"
                                                data-aos="fade-up" data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/5.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/5.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Virbac Nurti Plus Gel</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 19.500</span>
                                                            <span class="old">Rp 28.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6  mb-30px"
                                                data-aos="fade-up" data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/6.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/6.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Cat Litter Box</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Rp 45.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px"
                                                data-aos="fade-up" data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/7.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/7.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Dog Crates Double Door</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 400.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/8.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/8.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Whiskas Makanan Kucing Kering Junior Mackerel</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 79.900</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="800">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/9.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/9.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 60%"></span>
                                                            </span>
                                                            <span class="rating-num">( 3 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Me-O Creamy Treats Salmon</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 21.900</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>

                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="200">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/1.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/1.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">
                                                            Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 100%"></span>
                                                            </span>
                                                            <span class="rating-num">( 5 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">
                                                            Cat Scratching Post and Activity Tree Natural Sisal Tower with Round Perch and Plush Ball Furniture</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Rp 40.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="400">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/2.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/2.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 80%"></span>
                                                            </span>
                                                            <span class="rating-num">( 4 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Pedigree Beef & Vegetable</a>
                                                        </h5>
                                                        <span class="price">
                                                            <span class="new">Rp 105.000</span>
                                                            <span class="old">Rp 130.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Single Prodect -->
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up"
                                                data-aos-delay="600">
                                                <!-- Single Prodect -->
                                                <div class="product">
                                                    <div class="thumb">
                                                        <a href="single-product-variable" class="image">
                                                            <img src="{{asset('images/product-image/3.jpg')}}"
                                                                alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('images/product-image/3.jpg')}}" alt="Product" />
                                                        </a>
                                                        <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                    </div>
                                                    <div class="content">
                                                        <span class="ratings">
                                                            <span class="rating-wrap">
                                                                <span class="star" style="width: 0%"></span>
                                                            </span>
                                                            <span class="rating-num">( 0 Review )</span>
                                                        </span>
                                                        <h5 class="title"><a href="single-product-variable">Zuke's Mini Naturals Peanut Butter & Oats Dog Treats</a></h5>
                                                        <span class="price">
                                                            <span class="new">Rp 65.000</span>
                                                            <span class="old">Rp 75.000</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shop-list">
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('storage/p0001.jpeg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('storage/p0001.jpeg')}}""
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Women's
                                                                Elizabeth Coat</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/2.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/2.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Ardene
                                                                    Microfiber
                                                                    Tights</a>
                                                            </h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$48.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/3.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/3.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 0%"></span>
                                                                </span>
                                                                <span class="rating-num">( 0 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Women's Long
                                                                Sleeve
                                                                Shirts</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.00</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/4.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/4.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 70%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3.5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Parrera
                                                                    Sunglasses -
                                                                    Lomashop</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/5.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/5.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Cool Man
                                                                    Wearing
                                                                    Leather</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                                <span class="old">$45.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/6.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/6.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 100%"></span>
                                                                </span>
                                                                <span class="rating-num">( 5 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Portrait Of A
                                                                    Young
                                                                    Stylish</a>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/7.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/7.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 80%"></span>
                                                                </span>
                                                                <span class="rating-num">( 4 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Men's Fashion
                                                                    Leather
                                                                    Bag</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/8.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/8.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Long sleeve
                                                                    knee
                                                                    length</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrapper">
                                            <div class="row">
                                                <div class="col-md-5 col-lg-5 col-xl-4">
                                                    <div class="product">
                                                        <div class="thumb">
                                                            <a href="single-product-variable" class="image">
                                                                <img src="{{asset('images/product-image/9.jpg')}}"
                                                                    alt="Product" />
                                                                <img class="hover-image"
                                                                    src="{{asset('images/product-image/9.jpg')}}"
                                                                    alt="Product" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-lg-7 col-xl-8">
                                                    <div class="content-desc-wrap">
                                                        <div class="content">
                                                            <span class="ratings">
                                                                <span class="rating-wrap">
                                                                    <span class="star" style="width: 60%"></span>
                                                                </span>
                                                                <span class="rating-num">( 3 Review )</span>
                                                            </span>
                                                            <h5 class="title"><a href="single-product-variable">Ardene Microfiber
                                                                Tights</a></h5>
                                                            <p>More room to move.With 80GB or 160GB of storage and up to
                                                                40 hours of battery life, the new iPod classic lets you
                                                                enjoy up to 40,000 songs or..</p>
                                                        </div>
                                                        <div class="box-inner">
                                                            <span class="price">
                                                                <span class="new">$38.50</span>
                                                            </span>
                                                            <button title="Edit Item" class=" edit-item">Edit Item</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->

                        <!--  Pagination Area Start -->
                        <div class="load-more-items text-center mt-30px0px" data-aos="fade-up">
                            <a href="#" class="btn btn-lg btn-primary btn-hover-dark m-auto"> Load More <i
                                    class="fa fa-refresh ml-15px" aria-hidden="true"></i></a>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->



    <!-- Search Modal Start -->
    <div class="modal popup-search-style" id="searchActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>Search Your Product</h2>
                        <form class="navbar-form position-relative" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                            <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- Login Modal Start -->
    <div class="modal popup-login-style" id="loginActive">
        <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
        <div class="modal-overlay">
            <div class="modal-dialog p-0" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-content">
                            <h2>Log in</h2>
                            <h3>Log in your account</h3>
                            <form action="#">
                                <input type="text" placeholder="Username">
                                <input type="password" placeholder="Password">
                                <div class="remember-forget-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <p>Remember</p>
                                        <span class="checkmark"></span>
                                    </div>
                                    <div class="forget-wrap">
                                        <a href="#">Forgot your password?</a>
                                    </div>
                                </div>
                                <button type="button">Log in</button>
                                <div class="member-register">
                                    <p> Not a member? <a href="login"> Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Modal End -->

     <!-- Modal -->
     <div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container zoom-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/zoom-image/1.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/zoom-image/2.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/zoom-image/3.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/zoom-image/4.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/1.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/2.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/3.jpg')}}"
                                            alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="{{asset('images/product-image/small-image/4.jpg')}}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2>Ardene Microfiber Tights</h2>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">( 5 Customer Review )</a></span>
                                </div>
                                <p class="mt-30px mb-0">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod tempor incidi ut labore
                                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita ullamco laboris nisi
                                    ut aliquip ex ea commodo </p>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart" href="#"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-compare">
                                        <a href="compare"><i class="pe-7s-refresh-2"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                    <span>SKU: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#">Fashion.</a>
                                        </li>
                                        <li>
                                            <a href="#">eCommerce</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-social-info pro-details-same-style d-flex">
                                    <span>Share: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
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
    <!-- Modal end -->
    @endsection

    <!-- Vendor JS -->
</body>

</html>
