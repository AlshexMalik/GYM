@extends('layout.collection')
@section('content')
    
<x-guest-layout >
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="firstname" :value="__('firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="midlename" :value="__('midlename')" />
            <x-text-input id="midlename" class="block mt-1 w-full" type="text" name="midlename" :value="old('midlename')" required autofocus autocomplete="midlename" />
            <x-input-error :messages="$errors->get('midlename')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="username" :value="__('username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="photo" :value="__('photo')" />
            <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" required autofocus autocomplete="photo" />
            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="wieght" :value="__('phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="hight" :value="__('hight')" />
            <x-text-input id="hight" class="block mt-1 w-full" type="text" name="hight" :value="old('hight')" required autofocus autocomplete="hight" />
            <x-input-error :messages="$errors->get('hight')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="wieght" :value="__('wieght')" />
            <x-text-input id="wieght" class="block mt-1 w-full" type="text" name="wieght" :value="old('wieght')" required autofocus autocomplete="wieght" />
            <x-input-error :messages="$errors->get('wieght')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="address" :value="__('address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        <div>
             
            <x-text-input id="role" class="block mt-1 w-full" type="hidden" name="role" value="user"  required autofocus autocomplete="role" />
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 
<div class="footerdiv">

</div>
<style>
    .footerdiv{
        background-color: #F3F4F6;
        height: 100px;
    }
</style>
@endsection