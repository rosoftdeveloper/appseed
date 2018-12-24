@extends('layouts.app')

@section('content')

    <body class="landing-page">

        @include('sections.google-tag-manager')

        @include('sections.nav')

        <div class="wrapper">

            @include('sections.header')
            @include('sections.about-us')
            @include('sections.testimonials-1')
            @include('sections.pricing-2')
            @include('sections.contact-us')
            @include('sections.footer-default')

        </div>

    </body>

@endsection
