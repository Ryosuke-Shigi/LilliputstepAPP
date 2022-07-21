<html>
    <head>
        @yield('title')
        @yield('meta')
    </head>
    <body>
        <!-- hedaer -->
        @component('components.header')
        @endcomponent


        @yield('content')

        <!-- footer -->
        @component('components.footer')
        @endcomponent
    </body>
</html>
