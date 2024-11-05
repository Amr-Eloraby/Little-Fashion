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
                            <img style="width: 600px; height: 600px;" src="{{ asset("storage/products/$product->image") }}"
                                class="img-fluid product-image" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="product-info d-flex">
                            <div>
                                <h2 class="product-title mb-0">{{ $product->name }}</h2>
                            </div>

                            <small class="product-price text-muted ms-auto mt-auto mb-5">${{ $product->price }}</small>
                        </div>

                        <div class="product-description">

                            <strong class="d-block mt-4 mb-2">Description</strong>

                            <p class="lead mb-5">{{ $product->description }}</p>
                        </div>

                        <div class="product-cart-thumb row">
                            @if (session('payment'))
                                <div class="alert alert-success">
                                    {{ session('payment') }}
                                </div>
                            @endif
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
                            <form action="{{ route('theme.payment') }}" method="POST" class="contact-form me-lg-5 pe-lg-3"
                                role="form">
                                @csrf
                                <div class="form-floating">
                                    <input type="text" name="card-name" id="card-name" class="form-control">
                                    @error('card-name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label for="card-name">Name on card</label>
                                </div>

                                <div class="form-floating my-4">
                                    <input type="text" name="card-number" id="card-number" class="form-control">
                                    @error('card-number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label for="card-number">Credit card number</label>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-floating my-6 col-3">
                                        <input type="text" name="expiration" id="expiration" class="form-control">
                                        @error('expiration')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <label for="expiration">Expiration</label>
                                    </div>
                                    <div class="form-floating my-6 col-3">
                                        <input type="text" name="cvv" id="cvv" class="form-control">
                                        @error('cvv')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <label for="cvv">CVV</label>
                                    </div>
                                </div>
                                @if (Auth::check())
                                    <div class="col-lg-5 col-6">
                                        <button type="submit" class="form-control">Send</button>
                                    </div>
                                @else
                                    <div class="alert alert-danger mt-2">
                                        You must log in to complete the process. </div>
                                @endif
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        {{-- <section class="related-product section-padding border-top">
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
        </section> --}}

    </main>
@endsection
