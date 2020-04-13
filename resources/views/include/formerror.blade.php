


<div class="alert-danger">
    <ul>
        @if(count($errors))
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        @endif
    </ul>
</div>
