@extends('layouts.app')

@section('content')
@section('content')

         <!-- Slider-wrapper -->
         <section class="video-wrapper pt-10 pb-4 pb-md-4 pb-lg-5">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
               <source src="{{ asset('assets/videos/video-background.mp4') }}" type="video/mp4">
            </video>
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="video-caption-blk position-relative py-10">
                        <div class="video-caption valign text-white text-center w-100 z-index2">
                            <h1 class="px-2 px-sm-0 d-inline-block">Joy Bor<span class="d-block text-white bg-theme px-2 px-sm-4 mt-2">Уникальная сиситема заказов</span></h1>
                            <h4 class="my-4 my-xl-5 px-0">В Узбекистане с любовью</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="section-bottom-wrapper pt-8 position-relative b-0 w-100 pb-0 text-center d-none d-md-block z-index2">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                     </div>
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-users font-lg d-inline-block mb-3"></span>                 
                           <h5 class="font-bold">250+ </h5>
                           <p>Активных пользователей.</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-briefcase font-lg d-inline-block mb-3"></span>                           
                           <h5 class="font-bold">500+ Организаций</h5>
                        </div>
                     </div>
                     <div class="col-md-3">
                     </div>
                  </div>
               </div>
            </div>            
         </section>
         <!-- Slider-wrapper -->
         <section class="pdt-cat-wrapper py-6">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="pdt-cat-blk text-center">
                        <div class="row">
                           <div class="col-lg-8 col-md-10 m-auto">
                              <div class="mb-6">
                                 <h2 class="text-capitalize">Наиболее интересующие категории</h2>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="pdt-cat-grid">
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-gift text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Красота</h3>
                                             <h5>362 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-printer text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Электричество</h3>
                                             <h5>607 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-construction text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Строительство</h3>
                                             <h5>805 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-paw text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Домашние Питомцы</h3>
                                             <h5>203 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-leaf text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Земледелие</h3>
                                             <h5>704 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-camera text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Интернет услуги</h3>
                                             <h5>507 Организаций</h5>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="view-pdt-btn">
                                       <a href="{{ route('organisation') }}" class="btn btn-md btn-theme radius-5 text-white py-3 px-4  text-capitalize shadow-theme-lg">Все Организации</a>
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
         <section class="pdt-filter-wrapper border-top py-6">
            <div class="container">
               <div class="row text-center">
                  <div class="col-lg-8 col-md-10 m-auto">
                     <div class="mb-6">
                        <h2 class="text-capitalize">Популярные Организаций</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-1.jpg') }}" alt="Card image">
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
                                             <img src="{{ asset('assets/img/user-avatar-1.png') }}" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Aana</strong></p>
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
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;41</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-2.jpg') }}" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Skin Care</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="{{ asset('assets/img/user-avatar-2.png') }}" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Shiny</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Fashion</span>
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
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;68</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-3.jpg') }}" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Car Wash</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="{{ asset('assets/img/user-avatar-3.png') }}" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Miller</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Repair</span>
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
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(3)</strong></span>
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
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-xl-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-4.jpg') }}" alt="Card image">
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
                                             <img src="{{ asset('assets/img/user-avatar-4.png') }}" alt="John Doe" class="mr-3 rounded-circle xd-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Smily</strong></p>
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
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-md-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-5.jpg') }}" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Stone Healing</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="{{ asset('assets/img/user-avatar-5.png') }}" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Linda</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Ayurvedic</span>
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
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(3)</strong></span>
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
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;23</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-0 mb-md-0 shadow border ">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="{{ asset('assets/img/service-img-6.jpg') }}" alt="Card image">
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
                                             <img src="{{ asset('assets/img/user-avatar-6.png') }}" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>David</strong></p>
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
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;95</span>
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
               <div class="row">
                  <div class="col-12">
                     <div class="view-pdt-btn text-center mt-5">
                        <a href="product-grid-view.html" class="btn btn-md btn-theme radius-5 text-white py-3 px-4  text-capitalize shadow-theme-lg">view all products</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="bg-theme-secondary py-6">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-6 col-md-10 text-center mx-auto">
                     <div class="mb-6 text-white text-center">
                        <h2>Our Clients Feedback</h2>
                        <h5 class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="testimonial-reel">
                        <div>
                           <div class="box shadow border-theme radius-1 p-4 text-center">
                              <span class="ml-n5 mt-n3 display-1 text-theme position-absolute">“</span>
                              <img class="img-fluid rounded-circle" src="{{ asset('assets/img/pdt-owner-img.jpg') }}" alt="Testimonial Author avatar">
                              <div class="testi-contents">
                                 <h4 class="text-theme my-4">Richard</h4>
                                 <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div class="box shadow border-theme radius-1 p-4 text-center">
                              <span class="ml-n5 mt-n3 display-1 text-theme position-absolute">“</span>
                              <img class="img-fluid rounded-circle" src="{{ asset('assets/img/replier-img.jpg') }}" alt="Testimonial Author avatar">
                              <div class="testi-contents">
                                 <h4 class="text-theme my-4">Shiny</h4>
                                 <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div class="box shadow border-theme radius-1 p-4 text-center">
                              <span class="ml-n5 mt-n3 display-1 text-theme position-absolute">“</span>
                              <img class="img-fluid rounded-circle" src="{{ asset('assets/img/pdt-owner-img.jpg') }}" alt="Testimonial Author avatar">
                              <div class="testi-contents">
                                 <h4 class="text-theme my-4">Richard</h4>
                                 <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div class="box shadow border-theme radius-1 p-4 text-center">
                              <span class="ml-n5 mt-n3 display-1 text-theme position-absolute">“</span>
                              <img class="img-fluid rounded-circle" src="{{ asset('assets/img/replier-img.jpg') }}" alt="Testimonial Author avatar">
                              <div class="testi-contents">
                                 <h4 class="text-theme my-4">Shiny</h4>
                                 <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="newsletter-wrapper border-top py-6">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-10 text-center mx-auto">
                     <div class="mb-6 text-center">
                        <h2>Subscribe for Latest Services</h2>
                        <h5 class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-lg-8 mx-auto">
                     <div class="d-none d-md-flex input-group border-theme radius-5 shadow">
                        <input type="email" class="form-control custom-input-height radius-5 border-0 no-bg-color" placeholder="Please enter your email to subscribe">
                        <span class="input-group-btn ml-n5">
                        <button class="btn btn-style px-5 py-3 text-white radius-5" type="submit">Subscribe</button>
                        </span>
                     </div>
                     <div class="d-inline-block d-md-none mb-3 input-group border-theme radius-5 shadow">
                        <input type="email" class="form-control custom-input-height radius-5 border-0 no-bg-color" placeholder="Please enter your email to subscribe">
                     </div>
                     <div class="text-center d-block d-md-none">
                        <button class="btn btn-style px-5 py-3 mx-auto text-white radius-5" type="submit">Subscribe                     
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection
@endsection