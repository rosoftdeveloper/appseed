<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include(config('themes.view_path.' . session('theme')) . 'includes.head')

<body>

@include(config('themes.view_path.' . session('theme')) . 'sections.sidenav')

    <!-- Main content -->
    <div class="main-content">

        @include(config('themes.view_path.' . session('theme')) . 'sections.topnav')

        @yield('content')

    </div>

@include(config('themes.view_path.' . session('theme')) . 'sections.footer')

@include(config('themes.view_path.' . session('theme')) . 'includes.footer-resources')

</body>
</html>
