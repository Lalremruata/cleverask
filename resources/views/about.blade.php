@extends('user.app')
@section('title', 'About Us | cleverask')
@section('main-content')
    <div class="container">
        <h2>About Us</h2>
        <hr>
        {{-- First detail --}}
        <div class="row forum" >
            <div class="col-md-3">
                <div class="profile-user-info">
                    <img class="img-circle img-responsive" src="{{ asset('img/zoa.jpg') }}" height="60">
                    <h2></h2>
                </div>
                <hr>
            </div>
            <div class="col-md-9">
                <h1>Zothankima</h1>
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        <div class="thread-info-avatar">
                            <img class="img-circle img-responsive" src="{{ asset('img/zoa.jpg') }}">
                            </a>
                        </div>

                        <div class="thread-info-author">
                        </div>

                        <div class="thread-info-tags">
                            <span class="label label-default"></span>
                        </div>
                    </div>

                    <div class="panel-body forum-content">
                        <p>Zothankima is a master of piece who is full of creative ideas and brilliant thoughts. He drive an important role in making of this forum.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        {{-- Second Detail --}}
        <div class="row forum" >
            <div class="col-md-3">
                <div class="profile-user-info">
                    <img class="img-circle img-responsive" src="{{ asset('img/robert.jpg') }}" height="60">
                    <h2></h2>
                </div>
                <hr>
            </div>
            <div class="col-md-9">
                <h1>Robert</h1>
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        <div class="thread-info-avatar">
                            <img class="img-circle img-responsive" src="{{ asset('img/robert.jpg') }}">
                            </a>
                        </div>

                        <div class="thread-info-author">
                        </div>

                        <div class="thread-info-tags">
                            <span class="label label-default"></span>
                        </div>
                    </div>

                    <div class="panel-body forum-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        {{-- Third detail --}}
        <div class="row forum" >
            <div class="col-md-3">
                <div class="profile-user-info">
                    <img class="img-circle" src="{{ asset('img/blank-avatar.png') }}" height="60">
                    <h2></h2>
                </div>
                <hr>
            </div>
            <div class="col-md-9">
                <h1></h1>
                <div class="panel panel-default">
                    <div class="panel-heading thread-info">
                        <div class="thread-info-avatar">
                            <img class="img-circle img-responsive" src="{{ asset('img/blank-avatar.png') }}">
                            </a>
                        </div>

                        <div class="thread-info-author">
                        </div>

                        <div class="thread-info-tags">
                            <span class="label label-default"></span>
                        </div>
                    </div>

                    <div class="panel-body forum-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        {{-- Third detail ends --}}
    </div>
@endsection