@extends('layouts.app')

@section('content')
<!-- SINGLE PRODUCT PAGE -->
<div class="single-pdt-page  py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <aside class="sidebar sidebar-user">
                <div class="user-card shadow border bg-white p-4 text-center">
                    <div class="user-info">
                        <div class="user-avatar mb-4">
                            <img src="assets/img/pdt-owner-img.jpg" alt="User Avatar" class="img-fluid rounded-circle border-theme">
                        </div>
                        <div class="user-details">
                            <h4>Steve Bell</h4>
                        </div>
                        <div class="rating-blk text-center d-inline-block">
                            <ul class="list-group list-group-horizontal">
                            <li class="pr-1">
                                <span class="fa fa-star"></span>
                            </li>
                            <li class="pr-1">
                                <span class="fa fa-star"></span>
                            </li>
                            <li class="pr-1">
                                <span class="fa fa-star"></span>
                            </li>
                            <li class="pr-1">
                                <span class="fa fa-star"></span>
                            </li>
                            <li class="pr-1">
                                <span class="fa fa-star"></span>
                            </li>
                            </ul>
                            <span class="rating__count">( 5 Rating )</span>
                        </div>
                        <hr>
                        <div class="pdt-contact-btn">
                            <span class="display-5">
                            <a href="tel:1234567890" class="btn btn-outline-theme d-inline-block radius-5">
                                <span class="lnr lnr-phone-handset align-middle"></span>
                            </a>
                            </span>
                            <span class="display-5">
                            <a href="mailto:nookx@example.com" class="btn btn-outline-theme d-inline-block radius-5">
                                <span class="lnr lnr-inbox align-middle"></span>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-pdt-desc mt-4">
                    <div class="shadow border p-4 text-center">
                        <div class="sidebar-price-tag">
                            <h2 class="text-theme"><strong>$ 230</strong></h2>
                        </div>
                        <hr class="my-4">
                        <div class="pricing-cta">
                            <a href="checkout.html" class="d-inline-block btn btn-outline-theme radius-5 btn-sm px-4 py-2 ">Buy Now</a>
                            <a href="cart-page.html" class="d-inline-block btn btn-outline-theme radius-5 btn-sm px-4 py-2 "><span class="d-inline-block"> Add Cart</span></a>
                        </div>
                    </div>
                </div>
                <div class="quicklink-sidebar-menu shadow border mt-4 p-4">
                    <div class="user-title-info">
                        <h4>Connect with me</h4>
                    </div>
                    <hr class="my-4">
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0 p-0 mb-2">
                            <div class="bg-fb px-3 py-1">
                            <a class="text-white display-5" href="javascript:;">
                                <i class="fa fa-facebook"></i>
                                <h5 class="d-inline-block ml-5">Steve2019</h5>
                            </a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 p-0 mb-2">
                            <div class="bg-tw px-3 py-1">
                            <a class="text-white display-5" href="javascript:;">
                                <i class="fa fa-twitter"></i>
                                <h5 class="d-inline-block ml-5">Steve2019</h5>
                            </a>
                            </div>
                        </li>
                        <li class="list-group-item border-0 p-0 mb-2">
                            <div class="bg-plus px-3 py-1">
                            <a class="text-white display-5" href="javascript:;">
                                <i class="fa fa-google"></i>
                                <h5 class="d-inline-block ml-5">Steve2019</h5>
                            </a>
                            </div>
                        </li>
                    </ul>
                </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-8 mt-5 mt-md-5 mt-lg-0">
                <div class="custom-border-left rounded shadow border p-4 bg-white mb-4 stg-title">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h3 class="text-capitalize">Decorations</h3>
                    </div>
                </div>
                </div>
                <div class="pdt-item-showcase shadow border">
                <div class="single-pdt-slider">
                    <div class="slide">
                        <img src="assets/img/single-pdt-slide-2.jpg" alt="Pdt Image Grid">
                    </div>
                    <div class="slide">
                        <img src="assets/img/single-pdt-slide-3.jpg" alt="Pdt Image Grid">
                    </div>
                    <div class="slide">
                        <img src="assets/img/single-pdt-slide-2.jpg" alt="Pdt Image Grid">
                    </div>
                    <div class="slide">
                        <img src="assets/img/single-pdt-slide-3.jpg" alt="Pdt Image Grid">
                    </div>
                    <div class="slide">
                        <img src="assets/img/single-pdt-slide-2.jpg" alt="Pdt Image Grid">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="single-pdt-thumb text-center my-3 my-sm-5 px-4">
                            <div class="wrapper-thumb">
                            <div class="slider-thumb">
                                <div class="slide-thumb">
                                    <img class="border-theme p-1" src="assets/img/single-pdt-thumb-2.jpg" alt="Pdt Image Thumbnail">
                                </div>
                                <div class="slide-thumb">
                                    <img class="border-theme p-1" src="assets/img/single-pdt-thumb-3.jpg" alt="Pdt Image Thumbnail">
                                </div>
                                <div class="slide-thumb">
                                    <img class="border-theme p-1" src="assets/img/single-pdt-thumb-2.jpg" alt="Pdt Image Thumbnail">
                                </div>
                                <div class="slide-thumb">
                                    <img class="border-theme p-1" src="assets/img/single-pdt-thumb-3.jpg" alt="Pdt Image Thumbnail">
                                </div>
                                <div class="slide-thumb">
                                    <img class="border-theme p-1" src="assets/img/single-pdt-thumb-2.jpg" alt="Pdt Image Thumbnail">
                                </div>
                            </div>
                            <!-- /thumb-slider -->
                            </div>
                        </div>
                        <!-- /item__preview-thumb-->
                    </div>
                    <div class="col-sm-12 text-center">
                        <div class="prev-nav thumb-nav mb-5">
                            <span class="lnr nav-left lnr-arrow-left btn-outline-theme radius-5 p-3 p-sm-3"></span>
                            <span class="lnr nav-right lnr-arrow-right btn-outline-theme radius-5 p-3 p-sm-3"></span>
                        </div>
                        <!-- /prev-nav -->
                    </div>
                </div>
                <!-- /item__action -->
                </div>
                <!-- /item-preview-->
                <div class="pdt-item-info mt-4 shadow border">
                <div class="pdt-item-nav">
                    <ul class="nav nav-tabs p-4">
                        <li>
                            <a href="#product-details" class="active px-4 py-2" data-toggle="tab">Item Details</a>
                        </li>
                        <li>
                            <a href="#product-comments" class="px-4 py-2" data-toggle="tab">Comments </a>
                        </li>
                        <li>
                            <a href="#product-reviews" class="px-4 py-2" data-toggle="tab">Reviews
                            <span>(1)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#product-faq" class="px-4 py-2" data-toggle="tab">item FAQ</a>
                        </li>                              
                        <li>
                    </ul>
                </div>
                <!-- /pdt-item-nav -->
                <div class="tab-content">
                    <div class="fade show tab-pane product-tab active" id="product-details">
                        <div class="tab-content-wrapper p-4">
                            <h3 class="mb-3">Landing Page Details</h3>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut scelerisque.
                            </p>
                        </div>
                    </div>
                    <div class="fade show tab-pane comments-tab" id="product-comments">
                        <div class="tab-content-wrapper p-4">
                            <div class="card-body p-0">
                            <div class="media align-items-top mb-4">
                                <div class="rounded-circle">
                                    <img src="assets/img/user-avatar-1.png" alt="user avatar" class="mr-4">
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-1">Aana &nbsp;&nbsp;<button class="btn btn-theme radius-5 my-2 my-md-0 text-white">Purchased</button></h6>
                                    <div class="insight-posted-date mb-2">
                                        <span class="text-grey xs-text-left">2 hours ago</span>
                                    </div>
                                    <div class="cmt-text d-block text-grey">Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis.</div>
                                </div>
                                <div class="amt-rect-sale d-inline-block float-right">
                                    <a href="javascript:;"><span class="text-theme">Reply</span></a>
                                </div>
                            </div>
                            <div class="media align-items-top mb-0">
                                <div class="rounded-circle">
                                    <img src="assets/img/owner-avatar-img.jpg" alt="user avatar" class="rounded-circle mr-4">
                                </div>
                                <div class="media-body">
                                    <form>
                                        <div class="form-group mb-3"><textarea class="form-control bg-input p-3" rows="5" placeholder="Reply to this comment..."></textarea></div>
                                    </form>
                                    <a href="javascript:;" class="btn btn-style px-4 py-2 text-white radius-5 text-capitalize">Submit Now</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="fade show tab-pane reviews-tab" id="product-reviews">
                        <div class="tab-content-wrapper p-4">
                            <div class="card-body p-0">
                            <div class="media align-items-top mb-4">
                                <div class="rounded-circle">
                                    <img src="assets/img/user-avatar-3.png" alt="user avatar" class="mr-4">
                                </div>
                                <div class="media-body">
                                    <h6 class="mb-1">Miller &nbsp;&nbsp;<a class="btn btn-theme radius-5 my-2 my-md-0 text-white">Support</a>
                                        <div class="insight-posted-date mb-2">
                                            <span class="text-grey ml-0 ml-md-0">2 hours ago</span>
                                        </div>
                                    </h6>
                                    <div class="rating-blk d-inline-block">
                                        <ul class="list-group list-group-horizontal float-left">
                                        <li class="pr-1">
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li class="pr-1">
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li class="pr-1">
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li class="pr-1">
                                            <span class="fa fa-star"></span>
                                        </li>
                                        <li class="pr-1">
                                            <span class="fa fa-star"></span>
                                        </li>
                                        </ul>
                                        <span class="rating__count">( 5 Rating )</span>
                                    </div>
                                    <div class="cmt-text d-block text-grey">Nunc placerat mi id nisi interdum mollis. Praesent there pharetra, justo ut sceleris que the mattis.</div>
                                </div>
                                <div class="amt-rect-sale d-inline-block float-right">
                                    <a href="javascript:;"><span class="text-theme">Reply</span></a>
                                </div>
                            </div>
                            <div class="media align-items-top mb-0">
                                <div class="rounded-circle">
                                    <img src="assets/img/owner-avatar-img.jpg" alt="user avatar" class="rounded-circle mr-4">
                                </div>
                                <div class="media-body">
                                    <form>
                                        <div class="form-group mb-3"><textarea class="form-control bg-input p-3" rows="5" placeholder="Reply to this comment..."></textarea></div>
                                    </form>
                                    <a href="javascript:;" class="btn btn-style px-4 py-2 text-white radius-5 text-capitalize">Submit Now</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="fade show tab-pane faq-tab" id="product-faq">
                        <div class="tab-content-wrapper p-4">
                            <div id="accordion" class="accordion">
                            <div class="card mb-0 border-0">
                                <div class="card-header border-theme bg-white mb-0">
                                    <a href="#collapseOne" class="card-title d-block collapsed d-block mb-0" data-toggle="collapse">
                                        <h5 class="d-inline-block">What is Lorem Ipsum? </h5>
                                    </a>
                                </div>
                                <div id="collapseOne" class="card-body collapse border-theme border-top-0" data-parent="#accordion">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="card-header border-theme bg-white mt-3 mb-0">
                                    <a href="#collapseTwo" class="card-title collapsed d-block mb-0" data-toggle="collapse">
                                        <h5 class="d-inline-block">Why do we use it? </h5>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="card-body collapse border-theme border-top-0" data-parent="#accordion">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>
                                </div>
                                <div class="card-header card-header border-theme bg-white mt-3 mb-0">
                                    <a href="#collapseThree" class="card-title collapsed d-block mb-0" data-toggle="collapse">
                                        <h5 class="d-inline-block">Where does come? </h5>
                                    </a>
                                </div>
                                <div id="collapseThree" class="card-body collapse border-theme border-top-0" data-parent="#accordion">
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>                           
                </div>
                <!-- /tab-content -->
                </div>
            </div>
            <!-- /col-md-8 -->                    
        </div>
    </div>
</div>
<!-- / SINGLE PRODUCT PAGE -->
<section class="relevant-owner-pdt border-top py-5">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="text-capitalize">More Items by Steve Bell</h3>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 pdt card-deck mx-0">
            <div class="card shadow mx-0 mb-lg-0">
                    <div class="wishlist-blk">
                        <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                    </div>
                    <div class="card-image">
                        <img class="card-img-top" src="assets/img/service-img-4.jpg" alt="Card image">
                        <div class="image-overlay">
                        <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Pet Boarding</a></h4>
                        <div class="card-text">
                        <div class="card-section-1 py-3">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="media align-items-center">
                                    <a href="user-profile.html" class="text-link d-inline-block">
                                        <img src="assets/img/owner-avatar-img.jpg" alt="John Doe" class="mr-3 img-fluid rounded-circle d-inline-block">
                                        <div class="media-body d-inline-block">
                                            <p><strong>Steve</strong></p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pdt-cat-tag text-right">
                                    <span class="bg-theme text-white px-3 py-1 radius-5">Pet Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-section-2">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="rating-blk d-inline-block">
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-sta text-rating font-sm"></i>
                                    </div>
                                    <div class="pdt-rating-btn ml-1 d-inline-block">
                                    <span class="text-theme"><strong>(5)</strong></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pdt-contact-btn text-right">
                                    <span class="p-2 display-5">
                                        <a href="tel:1234567890">
                                            <span class="lnr lnr-phone-handset"></span>
                                        </a>
                                    </span>
                                    <span class="p-2 display-5">
                                        <a href="mailto:nookx@example.com">
                                            <span class="lnr lnr-inbox"></span>
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-section-3 py-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="pdt-description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="card-section-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="pdt-add-to-cart text-center">
                                    <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                        <span class="lnr lnr-cart"></span>&nbsp;Add to Cart - 
                                        <span class=""><i class="fa fa-usd"></i>&nbsp;86</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pdt card-deck mx-0">
            <div class="card shadow mx-0 mb-lg-0">
                    <div class="wishlist-blk">
                        <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                    </div>
                    <div class="card-image">
                        <img class="card-img-top" src="assets/img/service-img-6.jpg" alt="Card image">
                        <div class="image-overlay">
                        <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Wedding Shot</a></h4>
                        <div class="card-text">
                        <div class="card-section-1 py-3">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="media align-items-center">
                                    <a href="user-profile.html" class="text-link d-inline-block">
                                        <img src="assets/img/owner-avatar-img.jpg" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                        <div class="media-body d-inline-block">
                                            <p><strong>Steve</strong></p>
                                        </div>
                                    </a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pdt-cat-tag text-right">
                                    <span class="bg-theme text-white px-3 py-1 radius-5">Studio</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-section-2">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="rating-blk d-inline-block">
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star text-rating font-sm"></i>
                                    <i class="fa fa-star-o text-rating font-sm"></i>
                                    </div>
                                    <div class="pdt-rating-btn ml-1 d-inline-block">
                                    <span class="text-theme"><strong>(4)</strong></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pdt-contact-btn text-right">
                                    <span class="p-2 display-5">
                                        <a href="tel:1234567890">
                                            <span class="lnr lnr-phone-handset"></span>
                                        </a>
                                    </span>
                                    <span class="p-2 display-5">
                                        <a href="mailto:nookx@example.com">
                                            <span class="lnr lnr-inbox"></span>
                                        </a>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-section-3 py-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="pdt-description">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-0">
                        <div class="card-section-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="pdt-add-to-cart text-center">
                                    <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                        <span class="lnr lnr-cart"></span>&nbsp;Add to Cart - 
                                        <span class=""><i class="fa fa-usd"></i>&nbsp;50</span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 pdt card-deck mx-0">
            <div class="card shadow mx-0 mb-0">
            <div class="wishlist-blk">
                <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
            </div>
            <div class="card-image">
                <img class="card-img-top" src="assets/img/service-img-1.jpg" alt="Card image">
                <div class="image-overlay">
                <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                </div>
            </div>
            <div class="card-body p-3">
                <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Interior Decoration</a></h4>
                <div class="card-text">
                <div class="card-section-1 py-3">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="media align-items-center">
                            <a href="user-profile.html" class="text-link d-inline-block">
                                <img src="assets/img/owner-avatar-img.jpg" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                <div class="media-body d-inline-block">
                                    <p><strong>Steve</strong></p>
                                </div>
                            </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pdt-cat-tag text-right">
                            <span class="bg-theme text-white px-3 py-1 radius-5">Construct</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section-2">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="rating-blk d-inline-block">
                            <i class="fa fa-star text-rating font-sm"></i>
                            <i class="fa fa-star text-rating font-sm"></i>
                            <i class="fa fa-star text-rating font-sm"></i>
                            <i class="fa fa-star text-rating font-sm"></i>
                            <i class="fa fa-star text-rating font-sm"></i>
                            </div>
                            <div class="pdt-rating-btn ml-1 d-inline-block">
                            <span class="text-theme"><strong>(5)</strong></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pdt-contact-btn text-right">
                            <span class="p-2 display-5">
                                <a href="tel:1234567890">
                                    <span class="lnr lnr-phone-handset"></span>
                                </a>
                            </span>
                            <span class="p-2 display-5">
                                <a href="mailto:nookx@example.com">
                                    <span class="lnr lnr-inbox"></span>
                                </a>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-section-3 py-3">
                    <div class="row">
                        <div class="col-12">
                            <div class="pdt-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-0">
                <div class="card-section-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="pdt-add-to-cart text-center">
                            <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                <span class="lnr lnr-cart"></span>&nbsp;Add to Cart - 
                                <span class=""><i class="fa fa-usd"></i>&nbsp;77</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection