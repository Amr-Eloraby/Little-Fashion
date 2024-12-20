<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/slick.css" />

    <link href="{{ asset('assets') }}/css/tooplate-little-fashion.css" rel="stylesheet">
</head>

<body>
    @include('theme.partials.preloader')

    <main>

        <section class="sign-in-form section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mx-auto col-12">

                        <h1 class="hero-title text-center mb-5">Sign Up</h1>

                        <div class="row">
                            <div class="col-lg-8 col-11 mx-auto">
                                <form action="{{route('register')}}" role="form" method="post">
                                    @csrf
                                    <div class="form-floating">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Enter Name">
                                        <label for="name">Name</label>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email address">
                                        <label for="email">Email address</label>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Password">
                                        <label for="password">Password</label>
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-floating">
                                        <input type="password" name="password_confirmation" id="confirm_password"
                                            class="form-control" placeholder="Password">
                                        <label for="confirm_password">Password Confirmation</label>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                        Create account
                                    </button>

                                    <p class="text-center">Already have an account? Please <a
                                            href="{{ route('login') }}">Sign
                                            In</a></p>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>

    @include('theme.partials.footer')

    @include('theme.partials.scripts')

</body>

</html>
