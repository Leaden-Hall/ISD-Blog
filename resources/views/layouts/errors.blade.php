@if(count($errors))
    @foreach($errors->all() as $error)
    <div class="alert alert-danger signin-error">
        {{$error}}
    </div>
    @endforeach
@endif
