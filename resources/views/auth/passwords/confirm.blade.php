@extends('layouts.main')

@section('content')
    <div class="bg-gradient-to-br from-blue-intami to-blue-500">
        <div class="mx-auto w-full md:max-w-xl md:px-24 lg:px-8 py-0  md:py-10 lg:py-20">
            <div class="w-full bg-white md:rounded md:shadow-lg p-10">
                <h1 class="text-2xl sm:text-3xl text-blue-intami  mb-5">{{ __('Confirm Password') }}</h1>

                <div class="card-body">
                    <p>{{ __('Please confirm your password before continuing.') }}</p>
                    <vue-form method="POST" action="{{ route('password.confirm') }}">

                        <input-text class="mb-5" name="password" label="Password" type="password" validation="required|min:8"></input-text>

                        <div class="">
                            <button type="submit"
                                    class="w-full rounded my-5 w-full bg-blue-intami text-center px-5 py-3 text-bold text-white">{{ __('Confirm') }}</button>

                            @if (Route::has('password.request'))
                                <p class="text-center ">
                                    <a class="hover:underline" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </p>
                            @endif
                        </div>
                    </vue-form>
                </div>
            </div>
        </div>
    </div>
@endsection
