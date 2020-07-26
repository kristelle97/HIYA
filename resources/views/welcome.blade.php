@extends('layouts.main')

@section('content')
    <div id="welcome">
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="container text-center my-4">
                <img src="{{asset('img/logo.png')}}" class="logo" alt="Intami Logo">
                <h1 class="mt-3 h3">
                    Join the first <br/>
                    Lebanese Women Network
                </h1>
                <a class="btn btn-primary btn-lg mt-4 px-5" href="{{ route('register') }}">Sign Up</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="how-does-it-work" class="py-5">
                <h2 class="text-center">
                    How does it work ?
                </h2>
                <div class="container mt-5">
                    <div class="row explanations">
                        <div class="col-12 col-md-6 col-lg-3 text-center explanation">
                            <img src="{{asset('img/welcome/icons/puzzle.png')}}" class="icon">
                            <p>Create an account and fill in information about yourself: job, country of residence, etc</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center explanation">
                            <img src="{{asset('img/welcome/icons/chat.png')}}" class="icon">
                            <p>Browse for other members of the network , applaud them and get in touch via our website</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center explanation">
                            <img src="{{asset('img/welcome/icons/search.png')}}" class="icon">
                            <p>Read our blog posts, watch interviews of inspiring Lebanese women and go through job listings</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center explanation">
                            <img src="{{asset('img/welcome/icons/friends.png')}}" class="icon">
                            <p>Tell your friends about INTAMI so they can enjoy the many perks of being a member of our
                                network</p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-primary btn-lg mt-4 px-5" href="{{ route('register') }}">Start</a>
                </div>
            </section>

            <section id="definition" class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <div class="card p-4">
                                <div class="card-body">
                                    <h2>
                                        <intami-sound></intami-sound>
                                        INTAMI <small class="verb">- verb</small>
                                    </h2>
                                    <p>
                                        Translates to “belong” in Arabic. It means to be a part of a group or an organisation
                                    </p>
                                    <h5 class="mb-0 mt-3">Why INTAMI ?</h5>
                                    <p> It is a small word with a huge meaning. We are constantly searching for an environment we belong to. The INTAMI network welcomes every Lebanese woman to create a community of connected members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
