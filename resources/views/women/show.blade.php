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
                    <a class="text-white" href="{{route('women.index')}}"><i class="fas fa-arrow-left"></i> All Women</a>
                </div>

                <div class="card mb-3">
                    <div class="card-body p-md-5 pb-0">
                        <h1 class="text-center">
                            {{$post->title}}
                        </h1>
                        <p class="text-center">{{ $post->publish_date->format('dS M Y') }}</p>

                        {!! $post->body !!}
                    </div>

                </div>

                <div class="mb-3">
                    <a class="text-dark" href="{{route('women.index')}}"><i class="fas fa-arrow-left"></i> All Women</a>
                </div>

                @include('components.comments')
            </div>
        </div>
    </div>
@endsection
