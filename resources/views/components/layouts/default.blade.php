<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>DocuWare Daily | Exchange with other DocuWare Partners</title>
    <meta name="robots" content="index,follow">
    <meta name="description"
          content="DocuWare Daily is a DocuWare Partners community to exchange DocuWare-related topics and solve problems together. DocuWare Daily isn't an official DocuWare website or service.">
    <meta name="language" content="de-CH">
    <meta name="url" content="https://www.docuwaredaily.com">

    <meta property="og:locale" content="de-CH">
    <meta property="og:type" content="">
    <meta property="og:title" content="DocuWare Daily | Connect with other DocuWare Partners">
    <meta property="og:description"
          content="DocuWare Daily is a DocuWare Partners community to exchange DocuWare-related topics and solve problems together. DocuWare Daily isn't an official DocuWare AG website or service.">
    <meta property="og:site_name" content="DocuWare Daily">
    <meta property="og:url" content="https://www.docuwaredaily.com">
    <meta property="og:image"
          content="https://res.cloudinary.com/codebar/image/upload/c_scale,dpr_2.0,f_auto,q_auto/www-docuwaredaily-com/seo-docuwaredaily-seo.webp">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="DocuWare Daily | Connect with other DocuWare Partners">
    <meta name="twitter:description"
          content="DocuWare Daily is a DocuWare Partners community to exchange DocuWare-related topics and solve problems together. DocuWare Daily isn't an official DocuWare AG website or service.">
    <meta name="twitter:image"
          content="https://res.cloudinary.com/codebar/image/upload/c_scale,dpr_2.0,f_auto,q_auto/www-docuwaredaily-com/seo-docuwaredaily-seo.webp">

    <!-- Fonts -->
    @googlefonts()

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased h-full">

{{--
@include('components.layouts.partials.header')
--}}

{{ $slot }}

@include('components.layouts.partials.footer')


<!-- Fathom - beautiful, simple website analytics -->
<script src="https://cdn.usefathom.com/script.js" data-site="JTNIJARE" defer></script>
<!-- / Fathom -->
</body>
</html>
