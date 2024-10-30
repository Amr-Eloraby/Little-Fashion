@php
    $popularProducts = \App\Models\Product::latest()->take(3)->get();
@endphp
@extends('theme.master')
@section('title', 'Products')
@section('product-active', 'active')
@section('content')
    <main>
        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">Choose your</span>
                            <span class="d-block text-dark">favorite stuffs</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="products section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="mb-5">New Arrivals</h2>
                    </div>
                    @if (count($products) > 0)
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-12 mb-3">
                                <div class="product-thumb">
                                    <a href="product-detail.html">
                                        <img style="width: 400px; height: 200px;"
                                            src="{{ asset("storage/products/$product->image") }}"
                                            class="img-fluid product-image" alt="">
                                    </a>

                                    <div class="product-top d-flex">
                                        <a href="#" class="bi-heart-fill product-icon"></a>
                                    </div>

                                    <div class="product-info d-flex">
                                        <div>
                                            <h5 class="product-title mb-0">
                                                <a href="product-detail.html"
                                                    class="product-title-link">{{ $product->name }}</a>
                                            </h5>

                                            <p class="product-p">{{ $product->description }}</p>
                                        </div>

                                        <small class="product-price text-muted ms-auto">${{ $product->price }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{ $products->render('pagination::bootstrap-5') }}
                    @endif

                    <div class="col-12">
                        <h2 class="mb-5">Popular</h2>
                    </div>

                    @if (count($popularProducts) > 0)
                        @foreach ($popularProducts as $product)
                            @if ($product->category_id == $product->category->id)
                                <div class="col-lg-4 col-12 mb-3">
                                    <div class="product-thumb">
                                        <a href="product-detail.html">
                                            <img style="width: 400px; height: 200px;"
                                                src="{{ asset("storage/products/$product->image") }}"
                                                class="img-fluid product-image" alt="">
                                        </a>
                                        <div class="product-info d-flex">
                                            <div>
                                                <h5 class="product-title mb-0">
                                                    <a href="product-detail.html"
                                                        class="product-title-link">{{ $product->name }}</a>
                                                </h5>

                                                <p class="product-p">{{ $product->description }}</p>
                                            </div>

                                            <small class="product-price text-muted ms-auto">${{ $product->price }}</small>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

    </main>
@endsection
