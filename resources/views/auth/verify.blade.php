@extends('layouts.main')

@section('content')
    <div class="bg-gradient-to-br from-blue-intami to-blue-500">
        <div class="mx-auto w-full md:max-w-xl md:px-24 lg:px-8 py-0  md:py-10 lg:py-20">
            <div class="w-full bg-white md:rounded md:shadow-lg p-10">
                <h1 class="text-2xl sm:text-3xl text-blue-intami  mb-5">Verify Your Email Address</h1>

                @if (session('resent'))
                    <el-alert class="mb-3"
                              show-icon
                              type="success"
                    >
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </el-alert>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <vue-form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    <button type="submit" class="w-full rounded my-5 w-full bg-blue-intami text-center px-5 py-3 text-bold text-white">{{ __('click here to request another') }}</button>.
                </vue-form>
            </div>
        </div>
    </div>
@endsection
