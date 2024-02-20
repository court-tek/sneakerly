<!-- resources/views/child.blade.php -->
 
@extends('layouts.authentication')
 
@section('title', 'Admin Login')
 

@section('content')
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href=""><img class="logo-img" src="{{ url('admin/images/logo.png') }}" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            
            <form method="POST" action="{{ route('login') }}" data-parsley-validate="">
                @csrf
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input id="inputEmail" type="email" name="email" data-parsley-equalto="change" value="{{ old('email') }}" placeholder="Enter email" autocomplete="off" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input id="inputPassword" type="password" name="password" data-parsley-equalto="change" placeholder="Password" required="" class="form-control">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>
                
                <button type="submit" value="validate" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a></div>
            <div class="card-footer-item card-footer-item-bordered">
                @if (Route::has('password.request'))
                        <a class="footer-link" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


{{-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>


    

    
</form> --}}