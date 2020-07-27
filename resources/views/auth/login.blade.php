@extends('layouts.main')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<style>
#app {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>
<div id="app">
    <router-view
    csrf="{{ csrf_token() }}"
    register-login="{{ route('login') }}"
    register-route="{{ route('register') }}"
    password-email-route="{{ route('password.email') }}"
    password-update="{{ route('password.update') }}"
    >

    </router-view>
</div>
@endsection
