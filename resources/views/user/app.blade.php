<!DOCTYPE html>
    <head>
        @include('user.layouts.head')
    </head>
<body style="display: table; height: 100%; width: 100%; margin: 0;">
    @include('user.layouts.header')
        @section('main-content')
            @show
    @include('user.layouts.footer')
</body>
</html>