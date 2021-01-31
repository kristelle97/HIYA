@extends('layouts.main')

@section('content')
<div class="bg-gradient-to-br from-blue-intami to-blue-500">
    <div class="mx-auto w-full md:max-w-xl md:px-24 lg:px-8 py-0  md:py-10 lg:py-20">
        <div class="w-full bg-white md:rounded md:shadow-lg p-10">
            <h1 class="text-2xl sm:text-3xl text-blue-intami  mb-5">Reset Password</h1>

            <div class="card-body">
                <p>{{ __('Please confirm your password before continuing.') }}</p>
                <vue-form method="POST" action="{{ route('password.update') }}">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input-text name="email" class="mb-5"
                                label="Email"
                                type="email"
                                validation="required|email"
                                value="{{ $email ?? old('email') }}"></input-text>
                    <input-text name="password" label="Password" type="password" validation="required|min:8"  class="mb-5"></input-text>
                    <input-text name="password_confirmation" label="Confirm Password" type="password" validation="required|min:8"  class="mb-5"></input-text>

                    <button type="submit"
                            class="w-full rounded w-full bg-blue-intami text-center px-5 py-3 text-bold text-white">Reset Password</button>
                </vue-form>
            </div>
        </div>
    </div>
</div>
@endsection
