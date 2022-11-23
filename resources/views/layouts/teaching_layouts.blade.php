<html>
    <header>
        <title>
            @yield('title', 'THIS IS DEFAULT TITLE')
        </title>
        <link href="{{ asset('my_css.css') }}" rel="stylesheet"/>
    </header>
    <body>
        @include('layouts.teaching_navigation')
        @yield('body')
    </body>
</html>