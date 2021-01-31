@extends('layouts.main')

@section('content')
    <div class="bg-gradient-to-br from-blue-intami to-blue-500">
        <div class="mx-auto w-full md:max-w-xl md:px-24 lg:px-8 py-0  md:py-10 lg:py-20">
            <div class="w-full bg-white md:rounded md:shadow-lg p-10">
                <h1 class="text-2xl sm:text-3xl text-blue-intami  mb-5">{{ __('Reset Password') }}</h1>

                <div class="card-body">
                    @if (session('status'))
                        <el-alert class="mb-3"
                                  show-icon
                                  type="success"
                        >
                            {{ session('status') }}
                        </el-alert>
                    @endif
                        <vue-form method="POST" action="{{ route('password.email') }}">
                            <input-text name="email"
                                        label="Email"
                                        type="email"
                                        validation="required|email" class="mb-5"
                                        value="{{ old('email') }}"></input-text>

                            <button type="submit"
                                    class="w-full rounded w-full bg-blue-intami text-center px-5 py-3 text-bold text-white">Send Password Reset Link</button>
                        </vue-form>
                </div>
            </div>
        </div>
    </div>
@endsection
