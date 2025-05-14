<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nahdlatul Ulama</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('favicon.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    @include('layouts.css')
</head>

<body>
    <!-- Topbar Start -->
    {{-- @include('layouts.topbar') --}}
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    {{-- <!-- Header Start -->
    @include('layouts.header')
    <!-- Header End --> --}}

    @yield('content')

    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    @include('layouts.js')
    <!-- Template Javascript -->
</body>

</html>
