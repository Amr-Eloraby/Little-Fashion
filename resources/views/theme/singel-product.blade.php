@extends('theme.master')
@section('content')
    <main>

        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">We provide you</span>
                            <span class="d-block text-dark">Fashionable Stuffs</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="product-detail section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <div class="product-thumb">
                            <img src="{{asset('assets')}}/images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg"
                                class="img-fluid product-image" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="product-info d-flex">
                            <div>
                                <h2 class="product-title mb-0">Tree pot</h2>

                                <p class="product-p">Original package design from house</p>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">$25</small>
                        </div>

                        <div class="product-description">

                            <strong class="d-block mt-4 mb-2">Description</strong>

                            <p class="lead mb-5">Over three years in business, We’ve had the chance to work on a variety of
                                projects, with companies</p>
                        </div>

                        <div class="product-cart-thumb row">
                            <div class="col-lg-6 col-12">

                                <select class="form-select cart-form-select" id="inputGroupSelect01">
                                    <option selected>Quantity</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <button type="submit" class="btn custom-btn cart-btn" data-bs-toggle="modal"
                                    data-bs-target="#cart-modal">Add to Cart</button>
                            </div>

                            <p>
                                <a href="#" class="product-additional-link">Details</a>

                                <a href="#" class="product-additional-link">Delivery and Payment</a>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section class="related-product section-padding border-top">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h3 class="mb-5">You might also like</h3>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.html">
                                <img src="{{asset('assets')}}/images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg"
                                    class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert me-auto">New arrival</span>

                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Tree pot</a>
                                    </h5>

                                    <p class="product-p">Original package design from house</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">$25</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.html">
                                <img src="{{asset('assets')}}/images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg"
                                    class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <span class="product-alert">Low Price</span>

                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Fashion set</a>
                                    </h5>

                                    <p class="product-p">Costume package</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">$35</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="product-thumb">
                            <a href="product-detail.html">
                                <img src="{{asset('assets')}}/images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg"
                                    class="img-fluid product-image" alt="">
                            </a>

                            <div class="product-top d-flex">
                                <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>

                            <div class="product-info d-flex">
                                <div>
                                    <h5 class="product-title mb-0">
                                        <a href="product-detail.html" class="product-title-link">Juice Drinks</a>
                                    </h5>

                                    <p class="product-p">Nature made another world</p>
                                </div>

                                <small class="product-price text-muted ms-auto mt-auto mb-5">$45</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
