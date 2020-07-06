@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12">

                <div class="mb-3">
                    <a class="" href="{{route('members.index')}}">
                        <i class="fas fa-arrow-left"></i> Back to our members
                    </a>
                </div>

                <div class="card profile-card">
                    <img class="mx-auto d-block user-image shadow" src="{{$user->picture_url}}"/>

                    <div class="card-body">
                        <h1 class="text-center h3">
                            {{$user->full_name}}
                        </h1>

                        @if($user->work_area && $user->job_position)
                            <p class="text-center">"{{$user->job_position}}" in {{$user->work_area}} industry</p>
                        @elseif($user->work_area)
                            <p class="text-center">Working in {{$user->work_area}} industry</p>
                        @elseif($user->job_position)
                            <p class="text-center">"{{$user->job_position}}"</p>
                        @else
                            <p class="text-center">Job Position & Industry unknown</p>
                        @endif

                        @if($user->description)
                            <p>"{{$user->description}}"</p>
                        @endif

                        <div class="actions text-center">
                            <vue-form class="d-inline" form-class="d-inline" method="POST"
                                      action="{{route('members.clap',['slug'=>$user->slug])}}">
                                <button type="submit" class="btn btn-outline-dark">
                                    @if($user->liked())
                                        👏 Un-Applaude
                                    @else
                                        👏 Applaude
                                    @endif
                                </button>
                            </vue-form>
                        </div>
                    </div>

                </div>

                <div class="user-contact-card card mt-4">
                    <div class="card-body">
                        <h4>Contact {{$user->first_name}}</h4>
                        <vue-form method="POST" action="{{route('contact.store')}}">
                            <input type="hidden" name="receiver_id" value="{{$user->id}}"></input>
                            <input-textarea
                                name="content"
                                placeholder="Your message"
                            ></input-textarea>
                            <p class="text-right">
                                <button type="submit" class="btn btn-outline-primary">Send Message</button>
                            </p>
                        </vue-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
