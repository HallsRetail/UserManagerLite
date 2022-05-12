@extends('layouts.auth')
@section('title', 'Login')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <v-input id="email" type="email" name="email" placeholder="{{ __('Email Address') }}" label="{{ __('Email Address') }}" error="@error('email') is-invalid @enderror" value="{{ old('email') }}"></v-input>
        <v-input id="password" type="password" name="password" placeholder="{{ __('Password') }}" label="{{ __('Password') }}" error="@error('password') is-invalid @enderror" value="{{ old('password') }}"></v-input>
        <v-button id="login-button" variant="primary" type="submit">{{ __('Login') }}</v-button>
    </form>
@endsection
