<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title', 'Mạng xã hội')</title>
    {{-- Import CSS Files --}}
    <link href="{{ mix('assets/styles/pages/admin/index.css') }}" rel="stylesheet">
    <link href="{{ mix('assets/styles/font-awesome/all.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>

<div id="logo-sidebar"
     class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
     aria-label="Sidebar">
    @include('layout.sidebar')
</div>

<div class="p-4 sm:ml-64">
    @include('layout.header')

    @yield('content')
</div>

{{--Import Script Files--}}
@yield('script')
<script src="{{ mix('assets/scripts/flowbite/flowbite.js') }}"></script>
<script src="{{ mix('assets/scripts/fontawesome/all.js') }}"></script>
</body>

</html>
