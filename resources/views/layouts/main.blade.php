@extends('layouts.app')

@section('page')
    @include('components.nav')
    @include('components.flash')
    @include('components.errors')

    @yield('content')

@endsection
