<!-- resources/views/child.blade.php -->
 
@extends('layouts.authentication')
 
@section('title', 'Admin Register')
 

@section('content')
<form method="POST" action="{{ route('register') }}" class="splash-container">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Registration Form</h3>
            <p>Please enter your user information.</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input class="form-control form-control-lg" type="text" name="name" value="{{ old('name') }}" required="" placeholder="Name" autocomplete="off">
            </div>
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <input class="form-control form-control-lg" type="email" name="email" value="{{ old('email') }}" required="" placeholder="E-mail" autocomplete="off">
            </div>
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <input class="form-control form-control-lg" type="password" name="password" required="" placeholder="Password">
            </div>
            @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <input class="form-control form-control-lg"  type="password" name="confirm_password" required="" placeholder="Password Confirmation">
            </div>
            @error('password_confirmation')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group pt-2">
                <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
            </div>
            <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                </label>
            </div>
        </div>
        <div class="card-footer bg-white">
            <p>Already member? <a href="{{ url('login') }}" class="text-secondary">Login Here.</a></p>
        </div>
    </div>
</form>
@endsection

{{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                        type="password"
                        name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
</form> --}}