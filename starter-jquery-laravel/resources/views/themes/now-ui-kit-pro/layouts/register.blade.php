<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include(config('themes.assets.' . session('theme')) . '.includes.head')

<body class="landing-page">

@include(config('themes.assets.' . session('theme')) . '.sections.google-tag-manager')
@include(config('themes.assets.' . session('theme')) . '.sections.nav')

<div class="wrapper">
    <div class="page-header header-filter" filter-color="black">
        @yield('content')

        @include(config('themes.assets.' . session('theme')) . '.sections.footer')
    </div>

</div>

@include(config('themes.assets.' . session('theme')) . '.includes.footer-resources')

</body>
</html>

