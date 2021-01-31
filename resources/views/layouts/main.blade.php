@extends('layouts.app')

@section('page')
    @include('components.nav')
    @include('components.flash')
    @include('components.errors')

    <div id="main-page-content" class="flex-grow">
    @yield('content')
    </div>

    @include('components.footer')
@endsection
