
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="@yield('seo_meta_description')">
        <title>@yield('seo_title')</title>

        <link rel="icon" type="image/png" href="{{asset("forntend/uploads/favicon.png")}}" />

        <!-- All CSS -->
       @include('forntend.layout.styles')

       <!-- All Javascripts -->
       @include('forntend.layout.scripts')


        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">000-123-4444</li>
                            <li class="email-text">contact@admin.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            <li class="menu">
                                <a href="login.html"
                                    ><i class="fas fa-sign-in-alt"></i> Login</a
                                >
                            </li>
                            <li class="menu">
                                <a href="signup.html"
                                    ><i class="fas fa-user"></i> Sign Up</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include('Forntend.layout.navbar')

        @yield('main-content')

       @include('Forntend.layout.footer')

        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>

    <script src="{{asset("forntend/js/custom.js")}}"></script>
    </body>
</html>
