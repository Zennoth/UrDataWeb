@extends('layouts.app')

@section('content')
    <div class="login-clean" style="background-color: #FFEACE;">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="assets/img/Untitled%20design%20(11).png" style="width: 120px;filter: blur(0px) brightness(100%);"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block border rounded" type="submit" style="background-color: #7F5024;">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
@endsection
