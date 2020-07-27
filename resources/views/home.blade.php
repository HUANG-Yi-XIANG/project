@extends('layouts.nav')

@section('head')
<script src="{{ asset('js/app.js') }}" defer></script>  

@endsection

@section('content')
<router-view
csrf="{{ csrf_token() }}"
upload-image="{{ route('uploadImage') }}"
>

</router-view>

   
@endsection
