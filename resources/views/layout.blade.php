<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Mis_gastos')</title>
    <style>

        .active a {
            color: red;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li class="{{ setActive('home') }} "><a href="/">Home</a></li>
            <li class="{{ setActive('about') }} "><a href="/about">About</a></li>
            <li class="{{ setActive('portfolio') }}"><a href="/portfolio">Portafolio</a></li>
            <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>