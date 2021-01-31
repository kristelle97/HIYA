@extends('layouts.main')

@section('content')
    <div class="w-full bg-gray-100 py-10">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">

            <div class="mb-3">
                <a class="flex items-center hover:underline" href="{{route('members.index')}}">
                    <svg class="h-4 w-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to our members
                </a>
            </div>

            <div class="pt-20 h-full">
                <div class="bg-white p-5 rounded shadow-lg w-full pt-20 relative h-full flex flex-col">
                    <img class="mx-auto w-32 rounded-full shadow absolute mx-auto inset-x-0	-top-16"
                         src="{{$user->picture_url}}"/>
                    <div class="information flex-grow">
                        <h5 class="text-center font-semibold text-xl">{{$user->full_name}}</h5>
                        @if($user->country_of_residence)
                            <p class="text-center mb-0 text-gray-600">{{$user->country_of_residence}}</p>
                        @else
                            <p class="text-center mb-0 text-gray-600">Location unknown</p>
                        @endif

                        @if($user->work_area && $user->job_position)
                            <p class="text-center text-gray-600">"{{$user->job_position}}" in {{$user->work_area}}
                                industry</p>
                        @elseif($user->work_area)
                            <p class="text-center text-gray-600">Working in {{$user->work_area}} industry</p>
                        @elseif($user->job_position)
                            <p class="text-center text-gray-600">"{{$user->job_position}}"</p>
                        @else
                            <p class="text-center text-gray-600">Job Position & Industry unknown</p>
                        @endif

                        @if($user->description)
                            <p>"{{$user->description}}"</p>
                        @endif
                    </div>

                    <vue-form class="flex-grow mx-auto" form-class="d-inline mt-5" method="POST"
                              action="{{route('members.clap',['slug'=>$user->slug])}}">
                        <button type="submit"
                                class="w-full transition border-2 hover:border-blue-intami border-gray-300 hover:bg-blue-intami rounded px-4 py-2 hover:text-white">
                            @if($user->liked())
                                <span class="mr-3">👏</span> Un-Applaude
                            @else
                                <span class="mr-3">👏</span> Applaude
                            @endif
                        </button>
                    </vue-form>

                </div>
            </div>

            <div class="bg-white my-5 p-5 rounded shadow-lg w-full relative h-full flex flex-wrap">
                <h4 class="font-semibold w-full mb-2">Contact {{$user->first_name}}</h4>
                <vue-form class="w-full" method="POST" action="{{route('contact.store')}}">
                    <input type="hidden" name="receiver_id" value="{{$user->id}}"></input>
                    <input-textarea
                        name="content"
                        placeholder="Your message"
                    ></input-textarea>
                    <p class="text-right">
                        <button type="submit" class="transition border-2 hover:border-blue-intami border-gray-300 hover:bg-blue-intami rounded px-4 py-2 hover:text-white">Send Message</button>
                    </p>
                </vue-form>
            </div>

        </div>
    </div>
@endsection
