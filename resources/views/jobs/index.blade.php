@extends('layouts.main')

@section('content')
    <div class="w-full bg-gray-100 py-10">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">


            <h1 class="text-center font-semibold text-2xl mb-5">
                Jobs
            </h1>


            @if (count($posts)==0)
                <p class="text-center">
                    Nothing here yet !
                </p>
            @endif
            <div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
                <div class="grid gap-8 lg:grid-cols-2 sm:max-w-sm sm:mx-auto lg:max-w-full">
                    @foreach($posts as $post)
                        <div
                            class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                            <div class="p-5 border border-t-0">
                                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                                    <span
                                        class="text-gray-600">{{ $post->publish_date->format('d M Y') }}</span>
                                </p>
                                <a href="{{ route('jobs.show', $post->slug) }}" aria-label="Category"
                                   title="Visit the East"
                                   class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{ $post->title }}</a>
                                <p class="mb-2 text-gray-700">
                                    {{ $post->excerpt }}
                                </p>
                                <a href="{{ route('jobs.show', $post->slug) }}" aria-label=""
                                   class="inline-flex items-center font-semibold transition-colors duration-200 text-yellow-intami hover:text-yellow-800">Learn
                                    More</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
@endsection
