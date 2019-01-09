@extends(config('themes.view_path.' . session('theme')) . 'layouts.base')

@section('content')

<main>

    @include(config('themes.view_path.' . session('theme')) . 'sections.header')
    @include(config('themes.view_path.' . session('theme')) . 'sections.cards')
    @include(config('themes.view_path.' . session('theme')) . 'sections.awesome-features')
    @include(config('themes.view_path.' . session('theme')) . 'sections.design-system')
    @include(config('themes.view_path.' . session('theme')) . 'sections.modern-interface')
    @include(config('themes.view_path.' . session('theme')) . 'sections.team')
    @include(config('themes.view_path.' . session('theme')) . 'sections.bubble')
    @include(config('themes.view_path.' . session('theme')) . 'sections.contact-form')
    @include(config('themes.view_path.' . session('theme')) . 'sections.technologies')

</main>

@endsection

