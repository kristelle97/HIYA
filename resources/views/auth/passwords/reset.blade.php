@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <vue-form method="POST" action="{{ route('password.update') }}">
                        <input type="hidden" name="token" value="{{ $token }}">
                        <input-text name="email"
                                    label="Email"
                                    type="email"
                                    validation="required|email"
                                    value="{{ $email ?? old('email') }}"></input-text>
                        <input-text name="password" label="Password" type="password" validation="required|min:8"></input-text>
                        <input-text name="password_confirmation" label="Confirm Password" type="password" validation="required|min:8"></input-text>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </vue-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
