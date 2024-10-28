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
    
        <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('assets')}}/css/bootstrap-icons.css" rel="stylesheet">
    
        <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css"/>
    
        <link href="{{asset('assets')}}/css/tooplate-little-fashion.css" rel="stylesheet">
    </head>

<body>
    @include('theme.partials.preloader')

    <main>

        <section class="sign-in-form section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mx-auto col-12">

                        <h1 class="hero-title text-center mb-5">Sign Up</h1>

                        <div class="social-login d-flex flex-column w-50 m-auto">

                            <a href="#" class="btn custom-btn social-btn mb-4">
                                <i class="bi bi-google me-3"></i>

                                Continue with Google
                            </a>

                            <a href="#" class="btn custom-btn social-btn">
                                <i class="bi bi-facebook me-3"></i>

                                Continue with Facebook
                            </a>
                        </div>

                        <div class="div-separator w-50 m-auto my-5"><span>or</span></div>

                        <div class="row">
                            <div class="col-lg-8 col-11 mx-auto">
                                <form role="form" method="post">

                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Email address" required>

                                        <label for="email">Email address</label>
                                    </div>

                                    <div class="form-floating my-4">
                                        <input type="password" name="password" id="password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password"
                                            required>

                                        <label for="password">Password</label>

                                        <p class="text-center">* shall include 0-9 a-z A-Z in 4 to 10 characters</p>
                                    </div>

                                    <div class="form-floating">
                                        <input type="password" name="confirm_password" id="confirm_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password"
                                            required>

                                        <label for="confirm_password">Password Confirmation</label>
                                    </div>

                                    <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                        Create account
                                    </button>

                                    <p class="text-center">Already have an account? Please <a href="{{route('theme.sign-in')}}">Sign
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
