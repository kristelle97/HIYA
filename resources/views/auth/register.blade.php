@extends('layouts.main')

@section('content')
    <div class="bg-gradient-to-br from-blue-intami to-blue-500">
        <div class="mx-auto w-full md:max-w-xl md:px-24 lg:px-8 py-0  md:py-10 lg:py-20">
            <div class="w-full bg-white md:rounded md:shadow-lg p-10">
                <h1 class="text-2xl sm:text-3xl text-blue-intami  mb-5">Register</h1>

                <div class="card-body">
                    <vue-form method="POST" action="{{ route('register') }}">

                        <input-text class="mb-5" name="first_name" label="First Name" validation="required|min:2"></input-text>
                        <input-text class="mb-5" name="last_name" label="Last Name" validation="required|min:2"></input-text>
                        <input-text class="mb-5" name="email" label="Email" type="email" validation="required|email"></input-text>
                        <input-text class="mb-5" name="password" label="Password" type="password" validation="required|min:8"></input-text>
                        <input-text class="mb-5" name="password_confirmation" label="Confirm Password" type="password" validation="required|min:8"></input-text>

                        <button type="submit"
                                class="w-full rounded w-full bg-blue-intami text-center px-5 py-3 text-bold text-white">{{ __('Register') }}</button>
                    </vue-form>
                </div>
            </div>
        </div>
    </div>
@endsection
