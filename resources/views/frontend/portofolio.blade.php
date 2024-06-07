@extends('frontend.layouts.app')

@section('title', 'My Recent Works')

@section('content')
    <div class="untree_co-section untree_co-section-4 pb-0" id="portfolio-section">
        <div class="container mt-5">
            <div class="relative">
                <div class="loader-portfolio-wrap">
                    <div class="loader-portfolio"></div>
                </div>
            </div>
            <div id="portfolio-single-holder"></div>

            <div class="portfolio-wrapper">
                <div id="posts" class="row">
                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="1">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Obsessed Book</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_1.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-2.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="2">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Book Binding</h3>
                                    <p>illustration, application</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_2.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Fresh Fruits</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_3.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Powerful Speaker</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_4.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Wireless Headset</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_5.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-1.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="1">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Black & White Cubic</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_6.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-2.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="2">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Nike Shoe</h3>
                                    <p>illustration, application</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_7.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Old Typewriter</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_8.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img"
                            data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Walking Man</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_9.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html"
                            class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Progress Journal</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_10.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html"
                            class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>The Dog</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_11.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html"
                            class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Beautiful Woman</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_12.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>

                    <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
                        <a href="portfolio-single-3.html"
                            class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
                            <div class="overlay">
                                <span class="wrap-icon icon-link2"></span>
                                <div class="portfolio-item-content">
                                    <h3>Book Binding</h3>
                                    <p>web, branding</p>
                                </div>
                            </div>
                            <img src="{{ asset('untree_minimal') }}/images/img_2.jpg" class="lazyload img-fluid" alt="Images" />
                        </a>
                    </div>
                </div>
            </div>

            <!-- </div>
            </div> -->
        </div>
    </div>
@endsection
