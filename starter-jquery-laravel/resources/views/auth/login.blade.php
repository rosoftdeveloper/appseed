@extends('layouts.app')

@section('content')
    <body class="login-page">

    @include('sections.google-tag-manager')

    @include('sections.nav')

    <div class="wrapper">
        @include('sections.login')
        @include('sections.footer')

    </div>

    </body>

@endsection
