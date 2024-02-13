<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('admin/uploads/favicon.png') }}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Styles including here --}}
    @include('admin.layouts.styles')

    {{-- Scripts including here --}}
    @include('admin.layouts.scripts')

</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>

            {{-- Navbar Include Here --}}
            @include('admin.layouts.navbar')

            {{-- Sidebar Include Here --}}
            @include('admin.layouts.sidebar')


            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>

                    {{-- Main content --}}
                    @yield('content')
                </section>
            </div>

        </div>
    </div>
    {{-- Footer Scripts  --}}
    @include('admin.layouts.footer_scripts')

</body>

</html>
