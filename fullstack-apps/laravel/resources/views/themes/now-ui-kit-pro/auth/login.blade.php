@extends(config('themes.assets.' . session('theme')) . '.layouts.base')

@section('content')

    <div class="page-header header-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url('{{asset(config('themes.assets.' . session('theme')) . '/assets/img/login.jpg')}}')"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-5 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="{{asset(config('themes.assets.' . session('theme')) . '/assets/img/now-logo.png')}}" alt="">
                                </div>
                            </div>
                            {{--@if ($errors->has('email'))--}}
                            {{--<span class="alert alert-danger" role="alert">--}}
                            {{--<strong>{{ $errors->first('email') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            {{--@if ($errors->has('password'))--}}
                            {{--<span class="alert alert-danger" role="alert">--}}
                            {{--<strong>{{ $errors->first('password') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                            <div class="card-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons users_circle-08"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control" placeholder="Email..." name="email" value="{{ old('email') }}" required autofocus>
                                </div>


                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="now-ui-icons text_caps-small"></i></span>
                                    </div>
                                    <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                                </div>


                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Get Started</button>
                            </div>
                            <div class="pull-left">
                                <h6>
                                    <a href="{{route('register')}}" class="link footer-link">Create Account</a>
                                </h6>
                            </div>
                            <div class="pull-right">
                                <h6>
                                    <a href="/" class="link footer-link">Home</a>
                                </h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

