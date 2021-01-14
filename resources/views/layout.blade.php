<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Laravel pagina')</title>
    </head>
    <body>

        @yield('content')
        <nav>test</nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/work">Work</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>

        <footer></footer>
    </body>
</html>