@extends('layouts.app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <router-link to="/" exact>Home</router-link>
                </li>
                <li class="nav-item ml-3">
                    <router-link to="/about">About</router-link>
                </li>
            </ul>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <router-link to="/login" exact>Login</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/register">Register</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


<div>
    <router-view></router-view>
</div>












{{--<div>--}}
{{--    <router-link to="/" exact>Home</router-link>--}}
{{--    <router-link to="/about">About</router-link>--}}
{{--</div>--}}
{{--<div>--}}
{{--    <router-link to="/login" exact>Login</router-link>--}}
{{--    <router-link to="/register">Register</router-link>--}}
{{--</div>--}}
{{--<div>--}}
{{--    <router-view></router-view>--}}
{{--</div>--}}
@endsection
