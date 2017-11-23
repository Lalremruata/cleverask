@extends('user.app')
@section('title', 'forum-home')

@section('main-content')
    <div class="container">
    <h2>Forum</h2>
    <hr>

        <div class="row forum" >
            <div class="col-md-3">
                <a class="btn btn-success btn-block" href="{{ route('create-thread') }}">Create Thread</a>

            </div>
            <div class="col-md-9">
                @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        <div class="thread-info-avatar">
                                <img class="img-circle" src="">
                            </a>
                        </div>

                        <div class="thread-info-author">{{ $post->posted_by }} posted
                            {{ $post->created_at->diffForHumans() }}
                        </div>

                        <div class="thread-info-tags">
                                <span class="label label-default"></span>
                        </div>
                    </div>

                    <div class="panel-body">
                        <a href="{{ route('post', $post->slug) }}">
                            <span class="badge pull-right">0</span>
                            <h4 class="media-heading">{{ $post->title }}</h4>
                            <p>{!! htmlspecialchars_decode($post->body) !!}</p>
                        </a>
                    </div>
                </div>
                    @endforeach
                <div class="text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

    @endsection

