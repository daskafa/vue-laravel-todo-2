@extends('layouts.app')
@section('content')
        <div class="container text-center w-25 mt-5 rounded-lg">
            <ul>
                <li>
                    <router-link to="/dashboard" class="px-3 py-1 text-danger font-weight-bold rounded-sm text-decoration-none bg-white" exact>Dashboard</router-link>
                </li>
            </ul>
            <ul>
                <li class="my-3"><router-link class="px-3 py-1 text-danger font-weight-bold rounded-sm text-decoration-none bg-white" to="/login" exact>Login</router-link></li>
                <li><router-link class="px-3 py-1 text-danger font-weight-bold rounded-sm text-decoration-none bg-white" to="/register">Register</router-link></li>
            </ul>
        </div>


<div>
    <router-view></router-view>
{{--    <example-component></example-component>--}}
</div>
    <div class="text-center">
        @if(\Illuminate\Support\Facades\Auth::check())
        Auth var ve kullanıcı id'si : {{ \auth()->user()->id }}
        @endif
    </div>
@endsection
