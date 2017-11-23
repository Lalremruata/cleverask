@extends('user.app')
@section('title', 'Login | cleverask.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @include('includes.messages')

                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('signin') }}" accept-charset="UTF-8"><input name="" type="hidden">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                <label for="name">Username</label>
                                <input class="form-control" name="name" type="text" id="name">
                            </div>

                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password" id="password">Password</label>
                                <input class="form-control" name="password" type="password" value="" id="password">
                            </div>

                            <div class="form-group">
                                <label>
                                    <input name="remember" type="checkbox" value="1">
                                    Remember login
                                </label>
                            </div>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                            <input class="btn btn-primary btn-block" type="submit" value="Login">
                        </form>
                    </div>
                </div>

                <a href="" class="btn btn-link btn-sm btn-block">Forgot your password?</a>
            </div>
        </div>
    </div>
    @endsection
@section('footer')
    <script src = "{{ asset('js/forum.js') }}" type="text/javascript"></script>
@endsection