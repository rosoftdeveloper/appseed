<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include(config('themes.view_path.' . session('theme')) . 'includes.head')

<body>

@include(config('themes.view_path.' . session('theme')) . 'sections.navbar')

@yield('content')

@include(config('themes.view_path.' . session('theme')) . 'sections.footer')

@include(config('themes.view_path.' . session('theme')) . 'includes.footer-resources')

</body>
</html>
