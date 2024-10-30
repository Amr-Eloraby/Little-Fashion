@extends('theme.master')
@section('title', 'Contact')
@section('contact-active', 'active')
@section('content')
    <main>
        <header class="site-header section-padding-img site-header-image">
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-12 header-info">
                        <h1>
                            <span class="d-block text-primary">Say hello to us</span>
                            <span class="d-block text-dark">love to hear you</span>
                        </h1>
                    </div>
                </div>
            </div>

            <img src="{{ asset('assets') }}/images/header/positive-european-woman-has-break-after-work.jpg"
                class="header-image img-fluid" alt="">
        </header>

        <section class="contact section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Let's <span>begin</span></h2>

                        @if (session('status-contact-create'))
                            <div class="alert alert-success">
                                {{ session('status-contact-create') }}
                            </div>
                        @endif
                        <form action="{{ route('theme.contact.store') }}" method="POST"
                            class="contact-form me-lg-5 pe-lg-3" role="form">
                            @csrf
                            <div class="form-floating">
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Full name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="name">Full name</label>
                            </div>

                            <div class="form-floating my-4">
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    class="form-control" placeholder="Email address" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-floating mb-4">
                                <textarea id="message" name="description" class="form-control" placeholder="Leave a comment here" required
                                    style="height: 160px"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <label for="message">Leave a comment here</label>
                            </div>

                            <div class="col-lg-5 col-6">
                                <button type="submit" class="form-control">Send</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 ms-auto">
                        <div class="row">
                            <div class="col-6 border-end contact-info">
                                <h6 class="mb-3">New Business</h6>

                                <a href="mailto:hello@company.com" class="custom-link">
                                    hello@company.com
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-6 contact-info">
                                <h6 class="mb-3">Main Studio</h6>

                                <a href="mailto:studio@company.com" class="custom-link">
                                    studio@company.com
                                    <i class="bi-arrow-right ms-2"></i>
                                </a>
                            </div>

                            <div class="col-6 border-top border-end contact-info">
                                <h6 class="mb-3">Our Office</h6>

                                <p class="text-muted">Akershusstranda 20, 0150 Oslo, Norway</p>
                            </div>

                            <div class="col-6 border-top contact-info">
                                <h6 class="mb-3">Our Socials</h6>

                                <ul class="social-icon">

                                    <li><a href="#" class="social-icon-link bi-messenger"></a></li>

                                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
