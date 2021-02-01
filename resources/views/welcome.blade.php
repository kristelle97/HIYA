@extends('layouts.main')

@section('content')
    <div id="welcome">
        <!-- ======= Hero Section ======= -->
        <section class="relative">
            <div class="relative bg-gradient-to-br from-blue-intami to-blue-500">
                <img src="{{asset('img/welcome/bg.jpg')}}"
                     class="absolute inset-0 object-cover w-full h-full opacity-30" alt=""/>
                <svg class="absolute inset-x-0 -bottom-1 text-white" viewBox="0 0 1160 163">
                    <path
                        fill="currentColor"
                        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
                    ></path>
                </svg>
                <div
                    class="relative px-4 py-16 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8 lg:py-20">
                    <div class="flex flex-col items-center justify-between xl:flex-row lg:my-20 ">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                            <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                                Join the first <br class="hidden md:block"/>
                                Lebanese Women Network
                            </h2>
                            <p class="max-w-xl mb-4 text-base text-gray-200 md:text-lg">
                                INTAMI network is a solution that aims to empower Lebanese women by bringing them
                                together and giving them the necessary tools to help them grow professionally,
                                personally and socially
                            </p>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                            <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
                                <img src="{{asset('img/logo.svg')}}" class="logo w-40 mx-auto mb-5" alt="Intami Logo"/>
                                @guest
                                    <h3 class="mb-4 text-xl text-center font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                        Become a member now
                                    </h3>
                                    <div class="mt-4">
                                        <p class="text-center">
                                            <a
                                                href="{{route('register')}}"
                                                type="submit"
                                                class="w-full py-3 px-6 font-medium text-white transition duration-200 rounded shadow-md bg-blue-intami hover:bg-blue-500 focus:shadow-outline focus:outline-none"
                                            >Sign up</a>
                                        </p>
                                    </div>
                                @endguest
                                @auth
                                    <div class="mt-4">
                                        <a
                                            href="{{route('members.index')}}"
                                            type="submit"
                                            class="bg-blue-intami block duration-200 focus:shadow-outline font-medium h-12 hover:bg-blue-300 items-center justify-center px-6 py-3 rounded shadow-md text-center text-white transition w-full"
                                        >
                                            Our Members
                                        </a>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main id="main">

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8 lg:py-20">
                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-5xl md:mb-12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto text-center sm:text-left">
                      <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                             class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-yellow-intami lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                          <defs>
                            <pattern id="27df4f81-c854-45de-942a-fe90f7a300f9" x="0" y="0" width=".135" height=".30">
                              <circle cx="1" cy="1" r=".7"></circle>
                            </pattern>
                          </defs>
                          <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f9)" width="52" height="24"></rect>
                        </svg>
                      </span>
                        How does it work?
                    </h2>
                </div>
                <div class="grid max-w-screen-lg gap-8 row-gap-10 mx-auto lg:grid-cols-2">
                    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row text-center sm:text-left">
                        <div class="sm:mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-yellow-intami bg-opacity-20 mx-auto sm:mx-none text-2xl">
                                🧩
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Join Intami</h6>
                            <p class="mb-3 text-sm text-gray-900">
                                Create an account and fill in information about yourself: job, country of residence,
                                etc.
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row text-center sm:text-left">
                        <div class="sm:mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-yellow-intami bg-opacity-20 mx-auto sm:mx-none text-2xl">
                                💬
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Participate</h6>
                            <p class="mb-3 text-sm text-gray-900">
                                Browse for other members of the network, applaud them and get in touch via our website
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row text-center sm:text-left">
                        <div class="sm:mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-yellow-intami bg-opacity-20 mx-auto sm:mx-none text-2xl">
                                💡
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Get Inspired and Network</h6>
                            <p class="mb-3 text-sm text-gray-900">
                                Read our blog posts, watch interviews of inspiring Lebanese women and go through job
                                listings
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col max-w-md sm:mx-auto sm:flex-row text-center sm:text-left">
                        <div class="sm:mr-4">
                            <div
                                class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-yellow-intami bg-opacity-20 mx-auto sm:mx-none text-2xl">
                                👯‍
                            </div>
                        </div>
                        <div>
                            <h6 class="mb-3 text-xl font-bold leading-5">Share & Build</h6>
                            <p class="mb-3 text-sm text-gray-900">
                                Tell your friends about INTAMI so they can enjoy the many perks of being a member of our
                                network
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8 lg:py-20">
                <div class="grid gap-10 lg:grid-cols-2">
                    <div class="lg:pr-10">
                        <div class="flex flex-wrap items-center">
                        <a href="/" aria-label="Go Home" title="Logo" class="inline-block">
                            <div
                                class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-yellow-intami bg-opacity-20 mx-auto sm:mx-none text-2xl">
                                🧬
                            </div>
                        </a>
                        <h5 class="mb-4 text-4xl font-extrabold leading-none ml-3">
                            Who we
                            <span class="inline-block text-yellow-intami">are</span>
                        </h5>
                        </div>
                        <p class="mb-6 text-gray-900">
                            Intami is an initiative launched by 8 young lebanese women. It is a network that brings
                            Lebanese women closer and gives them the tools they need to succeed.
                            Our online platform aims at helping Lebanese women professionally, personally and socially.
                            This project was inspired by all the amazing Lebanese women around us who need more
                            opportunities to grow. Our experiences abroad highlighted the gap between the tools we are
                            offered in Lebanon and those offered to women overseas. We believe there is no better way to
                            bridge that gap than by standing together and empowering each other.
                        </p>
                        <hr class="mb-5 border-gray-300"/>
                        <div class="flex items-center space-x-4">
                            {{--                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-blue-intami">--}}
                            {{--                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">--}}
                            {{--                                    <path--}}
                            {{--                                        d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"--}}
                            {{--                                    ></path>--}}
                            {{--                                </svg>--}}
                            {{--                            </a>--}}
                            <a href="https://www.instagram.com/intaminetwork/"
                               class="text-gray-600 transition-colors duration-300 hover:text-blue-intami">
                                <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                    <circle cx="15" cy="15" r="4"></circle>
                                    <path
                                        d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
                                    ></path>
                                </svg>
                            </a>
                            {{--                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-blue-intami">--}}
                            {{--                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">--}}
                            {{--                                    <path--}}
                            {{--                                        d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"--}}
                            {{--                                    ></path>--}}
                            {{--                                </svg>--}}
                            {{--                            </a>--}}
                            {{--                            <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-blue-intami">--}}
                            {{--                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-6">--}}
                            {{--                                    <path--}}
                            {{--                                        d="M23.8,7.2c0,0-0.2-1.7-1-2.4c-0.9-1-1.9-1-2.4-1C17,3.6,12,3.6,12,3.6h0c0,0-5,0-8.4,0.2 c-0.5,0.1-1.5,0.1-2.4,1c-0.7,0.7-1,2.4-1,2.4S0,9.1,0,11.1v1.8c0,1.9,0.2,3.9,0.2,3.9s0.2,1.7,1,2.4c0.9,1,2.1,0.9,2.6,1 c1.9,0.2,8.2,0.2,8.2,0.2s5,0,8.4-0.3c0.5-0.1,1.5-0.1,2.4-1c0.7-0.7,1-2.4,1-2.4s0.2-1.9,0.2-3.9v-1.8C24,9.1,23.8,7.2,23.8,7.2z M9.5,15.1l0-6.7l6.5,3.4L9.5,15.1z"--}}
                            {{--                                    ></path>--}}
                            {{--                                </svg>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                    <div class="relative" style="padding-top: 56.25%">
                        <iframe class="absolute inset-0 w-full h-full" height="315"
                                src="https://www.youtube.com/embed/n-9sUpGFCyw" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <section id="definition" class="w-full bg-blue-intami">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8 lg:py-20">
                    <div class="bg-white rounded p-10 md:p-16 mx-auto shadow-lg">
                        <div class="card-body">
                            <h2 class="mb-6 flex font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto text-center sm:text-left">
                                <intami-sound class="mr-4"></intami-sound>
                                Intami <small class="ml-2"> - <span class="text-yellow-intami">verb</span></small>
                            </h2>
                            <p class="">
                                Translates to <span class="text-yellow-intami">“belong”</span> in Arabic. It means to be a
                                part of a group or an
                                organisation
                            </p>
                            <h3 class="mt-5 font-semibold">Why Intami ?</h3>
                            <p> It is a small word with a huge meaning. We are constantly searching for an
                                environment we belong to. The INTAMI network welcomes every Lebanese woman to
                                create a community of connected members</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
