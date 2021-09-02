<html lang="en-US" class="placeholder backgroundblendmode objectfit object-fit backgroundcliptext bgsizecover skrollr skrollr-desktop">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{asset('site/images/favicon-32x32.png')}}">
    <title>@yield('title')</title>

    @include('layout.front-layout.css')
    @yield('style')


</head>

<body
    class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-15 desktop loaded"
    data-new-gr-c-s-check-loaded="14.1014.0" data-gr-ext-installed="" style="">

@if(Request()->route()->getName() != 'home')
    <div class="site-container relative overflow">
        @include('layout.front-layout.header')
        @include('layout.front-layout.navigation')
@endif

@yield('content')

@if(Request()->route()->getName() != 'home')
    @include('layout.front-layout.footer')
    @include('layout.front-layout.newletter')
    </div>
@endif

@include('layout.front-layout.js')

@yield('script')


</body>
</html>
