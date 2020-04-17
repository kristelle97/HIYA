@extends('layouts.main')

@section('content')
<div class="container custom-page">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <h1 class="text-center">
                {{$page->title}}
            </h1>

            {!! $page->body !!}
        </div>
    </div>
</div>
@endsection
