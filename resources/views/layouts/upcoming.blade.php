<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tech Mag template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('bona/assets/img/favicon-16x16.png?h=9c12a9fddb58107c1923b58829546df3') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('bona/assets/img/favicon-32x32.png?h=a247163730c6ec80d77a4aed4164dffd') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('bona/assets/img/android-chrome-192x192.png?h=958a0b509ae6e948548238e157abfeb7') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('bona/assets/img/android-chrome-512x512.png?h=ef73ad1e95ee70c0e0461420a5f8864a') }}">
    <link rel="stylesheet" href="{{ asset('bona/assets/bootstrap/css/bootstrap.min.css?h=ece822a25466a7dc76a8f4007e9ac281') }}">
    <link rel="manifest" href="{{ asset('bona/manifest.json?h=ef050e4c78792e9ce28f24decd016937') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ asset('bona/assets/css/styles.min.css?h=8b3c4c5b80b2a003379aadc300816a12') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    {{--	<link rel="stylesheet" type="text/css" href="{{ asset('bona/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">--}}
    {{--	<link rel="stylesheet" type="text/css" href="{{ asset('bona/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">--}}
    {{--	<link rel="stylesheet" type="text/css" href="{{ asset('bona/assets/plugins/OwlCarousel2-2.2.1/animate.css') }}">--}}
    {{--	<link rel="stylesheet" type="text/css" href="{{ asset('bona/assets/css/styles.min.css') }}">--}}
    {{--	<link rel="stylesheet" type="text/css" href="{{ asset('bona/assets/styles/responsive.css') }}">--}}
    @hasSection('canonical')<link rel="canonical" href="@yield('canonical')">@endif
    <script src="{{ asset(mix('dist/js/app.js')) }}"></script>
    @if (env('APP_ENV') !== 'local' && config('settings.analytics_id') !== null)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('settings.analytics_id') }}"></script>
        <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', '{{ config('settings.analytics_id') }}', {'anonymize_ip': true});</script>
    @endif

</head>
<body>
<div class="super_container">
    @include('partials.app.header')
    @include('partials.app.nav')
    @yield('upcoming')
    @include('partials.app.footer')
    @hasSection('scripts')@yield('scripts')@endif

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('bona/assets/js/script.min.js?h=cd7e26c62c422ae4fd1b6151814a03ae') }}"></script>
</body>
</html>
