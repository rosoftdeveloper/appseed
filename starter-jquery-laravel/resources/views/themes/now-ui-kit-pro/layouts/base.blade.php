<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include(config('themes.view_path.' . session('theme')) . 'includes.head')

<body class="landing-page">

@include(config('themes.view_path.' . session('theme')) . 'sections.google-tag-manager')
@include(config('themes.view_path.' . session('theme')) . 'sections.nav')

<div class="wrapper">

    @yield('content')

    @include(config('themes.view_path.' . session('theme')) . 'sections.footer')

</div>

@include(config('themes.view_path.' . session('theme')) . 'includes.footer-resources')

</body>
</html>

