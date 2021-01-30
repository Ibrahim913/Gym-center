<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> @yield('title' ,'Unknown page')</title>
    @yield('links_head')
</head>
<body>


@include('layouts.navbar')


@yield('body')


@include('layouts.footer')

    @yield('links_script')

</body>
</html>
