@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

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
                                    validation="required|email"
                                    value="{{ old('email') }}"></input-text>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
