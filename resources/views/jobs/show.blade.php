@extends('layouts.main')

@section('content')
    <div class="container custom-page">
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-sm-10 col-md-8">

                <div class="mb-3">
                    <a class="text-dark" href="{{route('jobs.index')}}"><i class="fas fa-arrow-left"></i> All Jobs</a>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-md-5 pb-0">
                        <h1 class="text-center">
                            {{$post->title}}
                        </h1>
                        <p class="text-center">{{ $post->publish_date->format('dS M Y') }}</p>

                        {!! $post->body !!}

                        @include('components.blog.likes')
                    </div>

                </div>

                <div class="mb-3">
                    <a class="text-dark" href="{{route('jobs.index')}}"><i class="fas fa-arrow-left"></i> All Jobs</a>
                </div>

                @include('components.blog.comments')

            </div>
        </div>
    </div>
@endsection
