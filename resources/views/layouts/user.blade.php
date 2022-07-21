<html>
    <head>
        @yield('title')
        @yield('meta')
    </head>
    <body class="homeBackColor">
        <!-- hedaer -->
        @component('components.header')
        @endcomponent

        @yield('content')

        <!-- footer -->
        @component('components.footer')
        @endcomponent

    </body>
</html>
