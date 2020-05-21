@extends('layouts.main')

@section('content')
<div class="container custom-page">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <h1 class="text-center">
                Jobs
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
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('jobs.show', $post->slug) }}">{{ $post->title }}</a> - {{
                                 $post->publish_date->format('dS M Y') }}</h5>
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
