@extends('layouts.main')

@section('content')
<div class="container custom-page">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <h1 class="text-center">
                Our articles
            </h1>

            <div class="row">
                <div class="container pb-4">
                    @if (count($posts)==0)
                        <p class="text-center">
                            Nothing here yet !
                        </p>
                    @endif

                    @foreach($posts as $post)
                        <div class="card card-blog-post mb-4">
                            <img class="card-img-top" src="{{$post->featured_image}}" alt="{{$post->featured_image_caption}}">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a> - {{ $post->publish_date->format('dS M Y') }}</h5>
                                @foreach($post->tags as $tag)
                                    <span class="badge badge-pill badge-dark">{{$tag->name}}</span>
                                @endforeach
                                <p class="card-text">{{ $post->excerpt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
