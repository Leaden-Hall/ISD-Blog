<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Viet Pointer Blog">
    <meta name="author" content="Tran Phuc Dinh, Nguyen Duy Thanh">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('/storage/assets/favicon.ico') }}">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/storage/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('/storage/assets/css/index.css') }}" rel="stylesheet">

</head>

<body class="text-center">

    @if(Session::has('authFail'))
    <div class="alert alert-danger signin-error">
        {{Session::get('authFail')}}
    </div>
    @endif

    @include('layouts.errors')

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf

        <img class="mb-4" src="{{ asset('/storage/assets/VietPointer_logo.png') }}" alt="VietPointer_logo">
        <h1 class="h3 mb-4 font-weight-bold text-white">A Company Blog</h1>
        <div class="form-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
        </div>

        <div class="form-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
        </div>
        {{--<div class="checkbox mb-3">--}}
            {{--<label class="text-white">--}}
                {{--<input type="checkbox" value="remember-me"> Remember me--}}
            {{--</label>--}}
        {{--</div>--}}
        <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>

</body>
</html>
