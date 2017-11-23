@extends('user.app')
@section('head')

@endsection
@section('title', '')

@section('main-content')

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=539045079788906';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="container">
        <h2>Forum</h2>
        <hr>

        <div class="row forum" >
            <div class="col-md-3">
                <div class="profile-user-info">
                        <img class="img-circle" src="{{ asset('img/blank-avatar.png') }}" height="60">
                    <h2>{{ $slug->posted_by }}</h2>
                </div>
                <hr>
                <a class="btn btn-link btn-block" href="{{ route('forum') }}"><i class="fa fa-arrow-left"></i> Back</a></a>
            </div>
            <div class="col-md-9">
                <h1>{{ $slug->title }}</h1>
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        <div class="thread-info-avatar">
                                <img class="img-circle img-responsive" src="{{ asset('img/blank-avatar.png') }}">
                            </a>
                        </div>

                        <div class="thread-info-author">
                            {{ $slug->posted_by }} posted
                            {{ $slug->created_at->diffForHumans() }}
                        </div>

                        <div class="thread-info-tags">
                            <span class="label label-default"></span>
                        </div>
                    </div>

                    <div class="panel-body forum-content">
                        {!! htmlspecialchars_decode($slug->body) !!}
                    </div>
                </div>
                <hr>
                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
            </div>
        </div>
    </div>

@endsection
@section('footer')
@endsection