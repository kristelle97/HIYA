{{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--            {{ config('app.name', 'Laravel') }}--}}
{{--        </a>--}}
{{--        <div>--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto">--}}

{{--            </ul>--}}

{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('jobs.index') }}">Jobs</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('women.index') }}">Women of Intami</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('event.index') }}">Events</a>--}}
{{--                </li>--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                    @if (Route::has('register'))--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    @else--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('home') }}">Members</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('profile.index') }}" role="button"--}}
{{--                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->first_name }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
{{--                                  style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<nav class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="relative flex items-center justify-between">
        <a href="{{ url('/') }}" aria-label="Company" title="Company" class="inline-flex items-center">
            <span
                class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase hover:text-blue-intami">Intami</span>
        </a>
        <ul class="flex items-center hidden space-x-8 lg:flex">
            <li><a href="{{ route('blog.index') }}" aria-label="Our blog" title="Our blog"
                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Blog</a>
            </li>
            <li><a href="{{ route('jobs.index') }}" aria-label="Jobs from our community" title="Jobs from our community"
                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Jobs</a>
            </li>
            <li><a href="{{ route('interview.index') }}" aria-label="Women of Intami" title="Interviews"
                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Interviews</a>
            </li>
            <li><a href="{{ route('event.index') }}" aria-label="Events" title="Events"
                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Events</a>
            </li>
            <li><a href="{{ route('recommendation.index') }}" aria-label="Our Recommendations"
                   title="Recommendations"
                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Recommendations</a>
            </li>
            @auth
                <li><a href="{{ route('members.index') }}" aria-label="Members" title="Members"
                       class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Members</a>
                </li>
            @endauth
        </ul>
        <ul class="flex items-center hidden space-x-8 lg:flex">
            @guest
                <li>
                    <a href="{{ route('login') }}" aria-label="Login" title="Login"
                       class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Login</a>
                </li>
                <li>
                    <a
                        href="{{route('register')}}"
                        class="inline-flex items-center justify-center h-12 px-6 font-medium text-white transition duration-200 rounded shadow-md bg-blue-intami hover:bg-blue-500 focus:shadow-outline focus:outline-none"
                        aria-label="Sign up"
                        title="Sign up"
                    >
                        Sign up
                    </a>
                </li>
            @endguest
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.index') }}" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}
                    </a>
                </li>
                <li>
                    <a class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami"
                       href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" class="hidden" method="POST">
                        @csrf
                    </form>
                </li>
            @endauth
        </ul>
        <!-- Mobile menu -->
        <div class="lg:hidden">
            <button aria-label="Open Menu" title="Open Menu"
                    onclick="document.querySelector('#mobile-nav').classList.toggle('hidden');"
                    class="p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline hover:bg-deep-purple-50 focus:bg-deep-purple-50">
                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                    <path fill="currentColor"
                          d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                    <path fill="currentColor"
                          d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                </svg>
            </button>
            <div class="absolute top-0 left-0 w-full hidden z-10" id="mobile-nav">
                <div class="p-5 bg-white border rounded shadow-sm">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <a href="{{url('/') }}" aria-label="Logo Intami" title="Logo Intami"
                               class="inline-flex items-center">
                                <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Intami</span>
                            </a>
                        </div>
                        <div>
                            <button onclick="document.querySelector('#mobile-nav').classList.toggle('hidden');"
                                    aria-label="Close Menu" title="Close Menu"
                                    class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                    <path
                                        fill="currentColor"
                                        d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <nav>
                        <ul class="space-y-4">
                            <li><a href="{{ route('blog.index') }}" aria-label="Our blog" title="Our blog"
                                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Blog</a>
                            </li>
                            <li><a href="{{ route('jobs.index') }}" aria-label="Jobs from our community"
                                   title="Jobs from our community"
                                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Jobs</a>
                            </li>
                            <li><a href="{{ route('interview.index') }}" aria-label="Women of Intami"
                                   title="Women of Intami"
                                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Interviews</a></li>
                                   <li><a href="{{ route('event.index') }}" aria-label="Event"
                                          title="Event"
                                          class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Events</a></li>
                            <li><a href="{{ route('recommendation.index') }}" aria-label="Recommendations"
                                   title="Recommendations"
                                   class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Recommendations</a></li>
                            @auth
                                <li><a href="{{ route('members.index') }}" aria-label="Members" title="Members"
                                       class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Members</a>
                                </li>
                            @endauth
                            @guest
                                <li>
                                    <a href="{{ route('login') }}" aria-label="Login" title="Login"
                                       class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami">Login</a>
                                </li>
                                <li>
                                    <a
                                        href="/"
                                        class="w-full rounded my-5 w-full bg-blue-intami text-center px-5 py-3 text-bold text-white"
                                        aria-label="Sign up"
                                        title="Sign up"
                                    >
                                        Sign up
                                    </a>
                                </li>
                            @endguest
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile.index') }}" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->first_name }}
                                    </a>
                                </li>
                                <li>
                                    <a class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-blue-intami"
                                       href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" class="hidden" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</nav>
