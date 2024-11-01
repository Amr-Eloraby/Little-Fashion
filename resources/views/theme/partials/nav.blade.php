@php
    $categories = App\Models\Category::all();
@endphp
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('theme.index') }}">
            <strong><span>Little</span> Fashion</strong>
        </a>

        <div class="d-lg-none">
            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

            <a href="product-detail.html" class="bi-bag custom-icon"></a>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link @yield('home-active')" href="{{ route('theme.index') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('story-active')" href="{{ route('theme.story') }}">Story</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @yield('product-active')" href="{{ route('theme.product') }}"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('theme.product', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('faqs-active')" href="{{ route('theme.faqs') }}">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @yield('contact-active')" href="{{ route('theme.contact') }}">Contact</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                @if (!Auth::check())
                    <a href="{{ route('login') }}" class="bi-person custom-icon me-3"></a>
                @else
                    <a href="{{ route('theme.sign-in') }}"
                        class="bi-person custom-icon me-3">{{ Auth::user()->name }}</a>
            </div>
            @endif
            <a href="{{ route('theme.singel-product') }}" class="bi-bag custom-icon"></a>
        </div>
    </div>
    </div>
</nav>
