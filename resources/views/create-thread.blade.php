@extends('user.app')
@section('head')
    <link href="{{ asset('user/css/forum.css') }}" rel="stylesheet">
@endsection
@section('title', 'Create your thread | cleverask.app')

@section('main-content')
    <div class="container">

        <h1>Create your thread</h1>
        <hr>

        <form method="POST" action="{{ route('post.store') }}" accept-charset="UTF-8">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Subject</label>
                <input class="form-control" required maxlength="60" name="title" type="text" id="title">
                <span class="help-block">Maximum 60 characters.</span>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <div class="box-body pad">
                    <textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label><br>
                    <input type="checkbox">&nbsp;Computer Engineering<br>
                    <input type="checkbox">&nbsp;Civil Engineering<br>
                    <input type="checkbox">&nbsp;Electrical Engineering<br>
            </div>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="hidden" name="slug" id="slug">
            <input class="btn btn-primary btn-block" type="submit" value="Create Thread">
            <a href="{{ route('forum') }}" class="btn btn-default btn-block">Cancel</a>
        </form>
    </div>

    @endsection
@section('footer')
    <script src = "{{ asset('js/forum.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{  asset('admin/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1');
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#title').change(function(){
                var slug = $('#title').val();
                var replace = slug.replace(/ /g, '-');
                $('#slug').val(replace);
            });
        });
    </script>

    @endsection