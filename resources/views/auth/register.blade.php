@extends('layouts.auth')
@section('title', 'Register')
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <v-input id="name" type="name" name="name" placeholder="{{ __('Name') }}" label="{{ __('Name') }}" error="@error('name') is-invalid @enderror" value="{{ old('name') }}"></v-input>
        <v-input id="email" type="email" name="email" placeholder="{{ __('Email Address') }}" label="{{ __('Email Address') }}" error="@error('email') is-invalid @enderror" value="{{ old('email') }}"></v-input>
        <v-input id="password" type="password" name="password" placeholder="{{ __('Password') }}" label="{{ __('Password') }}" error="@error('password') is-invalid @enderror" value="{{ old('password') }}"></v-input>
        <v-input id="password-confirm" type="password" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" label="{{ __('Confirm Password') }}" error="@error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}"></v-input>
        <v-button id="register-button" variant="primary" type="submit">{{ __('Register') }}</v-button>
    </form>
@endsection
