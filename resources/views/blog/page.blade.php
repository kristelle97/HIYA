@extends('layouts.main')

@section('content')
    <div class="w-full bg-gray-100 py-10 custom-page">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">

            <div class="bg-white p-5 rounded shadow-lg w-full relative h-full flex flex-col">

                <h1 class="text-center">
                    {{$page->title}}
                </h1>

                {!! $page->body !!}

            </div>
        </div>
    </div>
@endsection
