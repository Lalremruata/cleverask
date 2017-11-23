@extends('user.app')
@section('title', 'Profile | cleverask')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active">
                                <a href="{{ Route('settings') }}">Profile</a>
                            </li>
                            <li class="">
                                <a href="{{ Route('settings/password') }}">Password</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @if (count($errors)==0)
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Settings successfully saved!
                </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('profile.save') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input name="_token" type="hidden" value="{{ Session::token() }}">
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    @if(Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
                                    <img class="img-circle img-responsive" src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}">
                                    @endif
                                    <span class="help-block">Change your avatar <input type="file" class="form-control" name="image">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="col-md-3 control-label">Name</label>

                                <div class="col-md-6">
                                    <input class="form-control" required name="name" type="text" value="{{ $user->name }}" id="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>

                                <div class="col-md-6">
                                    <input class="form-control" required name="email" type="email" value="{{ $user->email }}" id="email">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-offset-3 col-md-6">
                                    <input class="btn btn-primary" type="submit" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection