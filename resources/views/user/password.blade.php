@extends('user.app')
@section('title', 'Password | Laravel')

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
                        <form method="POST" action="" accept-charset="UTF-8" class="form-horizontal">
                            <input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="">
                            <div class="form-group">
                                <label for="current_password" class="col-md-3 control-label">Current Password</label>

                                <div class="col-md-6">
                                    <input class="form-control" required name="current_password" type="password" value="" id="current_password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input class="form-control" required name="password" type="password" value="" id="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation" class="col-md-3 control-label">Confirm New Password</label>

                                <div class="col-md-6">
                                    <input class="form-control" required name="password_confirmation" type="password" value="" id="password_confirmation">
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