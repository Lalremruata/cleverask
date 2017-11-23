@if (count($errors) > 0)
    <div class="row">
        <div class="col-md-12">
            <ul style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li>
                        <small class="w3-text-red">{{ $error }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
