{{-- design from https://academy.wix.com/en/article/the-pages-and-sections-every-website-needs#pages-your-website-cant-do-without--}}
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
            

        <div class="container">
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>