@extends('user.app')
@section('title', 'Register | cleverask.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            @include('includes.messages')
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('signup') }}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Name</label>
                                <input class="form-control" placeholder="John Doe" name="name" type="text" id="name" value="{{ Request::old('name') }}">
                            </div>

                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                <label for="email">Email</label>
                                <input class="form-control" placeholder="john@example.com" name="email" type="email" id="email" value="{{ Request::old('email') }}">
                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password">Password</label>
                                <input class="form-control" name="password" type="password" id="username" >
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <input class="btn btn-primary btn-block" type="submit" value="Register">
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection