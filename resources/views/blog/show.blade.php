@extends('layouts.main')

@section('content')

    @if($post->featured_image)
        <div class="post-header" style="background-image: url('{{$post->featured_image}}');">
        </div>
    @endif

    <div class="container custom-page">
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-sm-10 col-md-8">

                <div class="mb-3">
                    <a class="text-white" href="{{route('blog.index')}}">
                        <i class="fas fa-arrow-left"></i> All Blog posts
                    </a>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-md-5 pb-0">
                        <h1 class="text-center">
                            {{$post->title}}
                        </h1>
                        <p class="text-center">{{ $post->publish_date->format('dS M Y') }}</p>
                        <div class="tags text-center mb-4">
                            @foreach($post->tags as $tag)
                                <span class="badge badge-pill badge-dark">{{$tag->name}}</span>
                            @endforeach
                        </div>

                        {!! $post->body !!}
                    </div>

                </div>

                <div class="mb-3">
                    <a class="text-dark" href="{{route('blog.index')}}">
                        <i class="fas fa-arrow-left"></i> All Blog posts
                    </a>
                </div>

                @include('components.comments')

            </div>
        </div>
    </div>
@endsection
