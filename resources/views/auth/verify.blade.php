@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
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
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </vue-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
