{{-- design from https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs#pages-your-website-cant-do-without--}}
@php 
    header('Cross-Origin-Embedder-Policy: require-corp');
    header('Cross-Origin-Opener-Policy: same-origin');
@endphp
@include('layauts.head')
@include('layauts.header')
@include('layauts.footer')
@include('layauts.content')
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
        </br></br></br></br>
            @yield('content')
        </div>

        @yield('footer')
    </body>
    <script type="text/javascript" src="js/app.js"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  <script src="js/react/components/like_button.js"></script>
    
</html>