<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{asset('site/images/minas_logodash.jpeg')}}">
    <title>@yield('title')</title>

    @include('layout.front-layout.css')
    @yield('style')


</head>

@if(Request()->route()->getName() == 'home' )
    <body class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-15 desktop loaded" data-new-gr-c-s-check-loaded="14.1014.0">
@elseif( Request()->route()->getName() == 'about')
    <body class="page-template page-template-page-templates page-template-about page-template-page-templatesabout-php page page-id-74  desktop">
@else
    <body>
@endif

@if(Request()->route()->getName() != 'home')
    <div class="site-container relative overflow">
        @include('layout.front-layout.header')
        @include('layout.front-layout.navigation')

        @yield('content')

        @include('layout.front-layout.footer')
        @include('layout.front-layout.newletter')

        @include('layout.front-layout.js')

    </div>
@else
    @yield('content')

    @include('layout.front-layout.js')

@endif


@yield('script')


</body>

</html>
