
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
                            @if(Auth::guard('company')->check())
                            <li class="menu">
                                <a href="{{ route('company_dashboard') }}">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>

                            @elseif(Auth::guard('candidate')->check())
                            <li class="menu">
                                <a href="{{ route('candidate_dashboard') }}">
                                    <i class="fas fa-home"></i> Dashboard
                                </a>
                            </li>

                            @else
                            <li class="menu">
                                <a href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                            <li class="menu">
                                <a href="{{ route('signup') }}">
                                    <i class="fas fa-user"></i> Sign Up
                                </a>
                            </li>
                            @endif
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
    @if ($errors->any())
        @foreach ($errors->all() as $error)

        <script>
            iziToast.error({
                title: '',
                message: '{{ $error }}',
                position: 'topRight'
            });
        </script>

        @endforeach
    @endif

    {{-- For single error --}}
    @if (session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            message: '{{ session()->get('error') }}',
            position: 'topRight'
        });
    </script>
    @endif

    {{-- For Success --}}
    @if (session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            message: '{{ session()->get('success') }}',
            position: 'topRight'
        });
    </script>
    @endif

    </body>
</html>
