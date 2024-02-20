<!-- resources/views/child.blade.php -->
 
@extends('layouts.authentication')
 
@section('title', 'Admin Register')
 

@section('content')
<form method="POST" action="{{ route('register') }}" class="splash-container" data-parsley-validate="">
    @csrf
    <div class="card">
        <div class="card-header">
            <h3 class="mb-1">Registration Form</h3>
            <p>Please enter your user information.</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input id="inputName" type="text" name="name" data-parsley-equalto="change" value="{{ old('name') }}" placeholder="Enter name" autocomplete="off" class="form-control" required="">
            </div>
            @error('email')
                <div class="p-1 mb-2 bg-danger text-white">
                    {{ $message }}
                </div>
            <div class="form-group">
                <label for="inputEmail">Email address</label>
                <input id="inputEmail" type="email" name="email" data-parsley-equalto="change" value="{{ old('email') }}" placeholder="Enter email" autocomplete="off" class="form-control" required="">
            </div>
            @error('email')
                <div class="p-1 mb-2 bg-danger text-white">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input id="inputPassword" type="password" name="password" data-parsley-equalto="change" placeholder="Password" required="" class="form-control">
            </div>
            @error('password')
                <div class="p-1 mb-2 bg-danger text-white">
                    {{ $message }}
                </div>
            @enderror
            <div class="form-group">
                <label for="inputConfirmPassword">Confirm Password</label>
                <input id="inputConfirmPassword" data-parsley-equalto="#inputPassword" name="password_confirmation" type="password" required="" placeholder="Password" class="form-control">
            </div>
            @error('password_confirmation')
                <div class="p-1 mb-2 bg-danger text-white">
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
            <p>Already member? <a href="/login" class="text-secondary">Login Here.</a></p>
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