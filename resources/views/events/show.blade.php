@extends('layouts.main')

@section('content')

    <div class="w-full bg-gray-100 py-10 custom-page">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">

            <div class="mb-3">
                <a class="flex items-center hover:underline" href="{{route('event.index')}}">
                    <svg class="h-4 w-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    All Intami Women
                </a>
            </div>

            <div class="bg-white rounded shadow-lg w-full relative h-full flex flex-col">

                @if($post->featured_image)
                    <img src="{{$post->featured_image}}" class="object-cover w-full h-80" alt=""/>
                @endif

                <div class="p-5 md:p-10">

                    <p class="mb-2 text-xs font-semibold tracking-wide text-gray-600 uppercase sm:text-center">
                        {{ $post->publish_date->format('d M Y')   }}
                    </p>
                    <div class="max-w-xl mb-5 md:mx-auto sm:text-center lg:max-w-2xl">
                        <div class="mb-4">
                            <h1 class="inline-block max-w-lg font-sans text-3xl font-extrabold leading-none tracking-tight text-black transition-colors duration-200 hover:text-deep-purple-accent-700 sm:text-4xl">
                                {{$post->title}}
                            </h1>
                        </div>
                        <p>
                            @foreach($post->tags as $tag)
                                <span class="text-yellow-intami p-1 px-2 bg-yellow-100 rounded-full">{{ucfirst($tag->name)}}</span>
                            @endforeach
                        </p>
                    </div>

                    {!! $post->body !!}

                    @include('components.blog.likes')
                </div>
            </div>

            <div class="bg-white rounded shadow-lg w-full relative h-full flex flex-col mt-5 p-5 md:p-10">
                @include('components.blog.comments')
            </div>
        </div>
    </div>
@endsection
