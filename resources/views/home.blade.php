@extends('user.app')
@section('head')

    @endsection
@section('title', 'Welcome to cleverask')

@section('main-content')
    <!-- Main content here -->
    <div class="container">

    </div>
    <div class="jumbotron text-center">
        <h1>Welcome to cleverask</h1>
        <h3>The place where your doubts are solved</h3>
        @if(Auth::guest())
            <a href="{{ route('register') }}" class="btn btn-primary w3-round-large">Join the community</a>
            <a href="{{ route('forum') }}" class="btn btn-default w3-round-large">Explore the forum</a>
        @else
            <a href="{{ route('create-thread') }}" class="btn btn-default w3-round-large">Start a thread</a>
        @endif
    </div>
    @endsection
@section('footer')
@endsection