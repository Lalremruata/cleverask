@extends('user.app')
@section('title', 'Dashboard | cleverask.app')
@section('main-content')
    <div class="container">

        <h1>Welcome <strong>{{ Auth::user()->name }}</strong></h1>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default panel-counter">
                    <div class="panel-heading">Threads</div>
                    <div class="panel-body">0</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default panel-counter">
                    <div class="panel-heading">Replies</div>
                    <div class="panel-body">0</div>
                </div>
            </div>
        </div>


        <div class="row profile-latest-items">
            <div class="col-md-6 col-md-offset-3">
                <h3>Latest Threads</h3>
                <div class="list-group">
                    <a href="" class="list-group-item">
                        <h4 class="list-group-item-heading"></h4>
                            <p class="list-group-item-text">

                            </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
