<div class="container">
    <div class="section">
        <h3 class="title text-center">Themes list</h3>
        <br>
        <div class="row">
            @foreach(config('themes.list') as $theme)
                <div class="col-md-4">
                    <div class="card card-plain card-blog">
                        <div class="card-image">
                            <a href="{{url('/theme/'. $theme['url'])}}" target="_blank">
                                <img class="img rounded img-raised" src="../assets/img/bg5.jpg">
                            </a>
                        </div>

                        <div class="card-body">
                            <h6 class="category text-info">Enterprise</h6>
                            <h4 class="card-title">
                                <a href="{{url('/theme/'. $theme['url'])}}" target="_blank">{{$theme['name']}}</a>
                            </h4>
                            <p class="card-description">
                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>

                            </p><div class="author">
                                <img src="../assets/img/olivia.jpg" alt="..." class="avatar img-raised">
                                <span>Anna Spark</span>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{--<div class="col-md-4">--}}
                {{--<div class="card card-plain card-blog">--}}
                    {{--<div class="card-image">--}}
                        {{--<a href="#pablo">--}}
                            {{--<img class="img rounded img-raised" src="../assets/img/bg5.jpg">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<h6 class="category text-info">Enterprise</h6>--}}
                        {{--<h4 class="card-title">--}}
                            {{--<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>--}}
                        {{--</h4>--}}
                        {{--<p class="card-description">--}}
                            {{--Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>--}}

                        {{--</p><div class="author">--}}
                            {{--<img src="../assets/img/olivia.jpg" alt="..." class="avatar img-raised">--}}
                            {{--<span>Anna Spark</span>--}}
                        {{--</div>--}}
                        {{--<p></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4">--}}
                {{--<div class="card card-plain card-blog">--}}
                    {{--<div class="card-image">--}}
                        {{--<a href="#pablo">--}}
                            {{--<img class="img rounded img-raised" src="../assets/img/bg27.jpg">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="card-body">--}}
                        {{--<h6 class="category text-success">--}}
                            {{--Startups--}}
                        {{--</h6>--}}
                        {{--<h4 class="card-title">--}}
                            {{--<a href="#pablo">Lyft launching cross-platform service this week</a>--}}
                        {{--</h4>--}}
                        {{--<p class="card-description">--}}
                            {{--Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>--}}
                        {{--</p><div class="author">--}}
                            {{--<img src="../assets/img/michael.jpg" alt="..." class="avatar img-raised">--}}
                            {{--<span>John Black</span>--}}
                        {{--</div>--}}
                        {{--<p></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-md-4">--}}
                {{--<div class="card card-plain card-blog">--}}
                    {{--<div class="card-image">--}}
                        {{--<a href="#pablo">--}}
                            {{--<img class="img rounded img-raised" src="../assets/img/bg21.jpg">--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<h6 class="category text-danger">--}}
                            {{--<i class="now-ui-icons media-2_sound-wave"></i> Enterprise--}}
                        {{--</h6>--}}
                        {{--<h4 class="card-title">--}}
                            {{--<a href="#pablo">6 insights into the French Fashion landscape</a>--}}
                        {{--</h4>--}}
                        {{--<p class="card-description">--}}
                            {{--Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>--}}

                        {{--</p><div class="author">--}}
                            {{--<img src="../assets/img/james.jpg" alt="..." class="avatar img-raised">--}}
                            {{--<span>James Newman</span>--}}
                        {{--</div>--}}
                        {{--<p></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>
</div>
