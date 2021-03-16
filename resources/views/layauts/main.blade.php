{{-- design from https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs#pages-your-website-cant-do-without--}}
@php 
    header('Cross-Origin-Embedder-Policy: require-corp');
    header('Cross-Origin-Opener-Policy: same-origin');
@endphp
@include('layauts.head')
@include('layauts.header')
@include('layauts.footer')

@empty($inc)                    
    {{$inc = 'layauts.content'}};
@endempty
@include($inc)

<html>
    <head>
        <title>App Name - @yield('title')</title>
        @yield('head')
    </head>
    <body>
   

        @yield('header')
        @yield('sidebar')
            
        @show
    
        <div class="container">
             @yield('content')
        </div>

        @yield('footer')
    </body>
    
    <script defer type="text/javascript" src="{{$_ENV['APP_URL']}}/js/app.js"></script>
    <script defer src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script defer src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script defer src="{{$_ENV['APP_URL']}}/js/react/components/like_button.js"></script>
    <script defer src="{{$_ENV['APP_URL']}}/js/my-code.js"></script>
    <script type="text/css" src="{{$_ENV['APP_URL']}}/js/holvertica_fonts.js"></script>

</html>