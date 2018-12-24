@extends('layouts.app')

@section('content')
    <body class="signup-page">

    @include('sections.google-tag-manager')

    @include('sections.nav')

    <div class="page-header header-filter" filter-color="black">
        @include('sections.register')
        @include('sections.footer')

    </div>

    </body>

@endsection
