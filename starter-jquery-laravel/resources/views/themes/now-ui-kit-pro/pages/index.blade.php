@extends(config('themes.view_path.' . session('theme')) . 'layouts.base')

@section('content')

    @include(config('themes.view_path.' . session('theme')) . 'sections.header')
    @include(config('themes.view_path.' . session('theme')) . 'sections.about-us')
    @include(config('themes.view_path.' . session('theme')) . 'sections.testimonials-1')
    @include(config('themes.view_path.' . session('theme')) . 'sections.pricing-2')
    @include(config('themes.view_path.' . session('theme')) . 'sections.contact-us')

@endsection

