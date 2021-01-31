@extends('layouts.main')

@section('content')
    <div class="w-full bg-gray-100">
        <div class="mx-auto sm:max-w-xl md:max-w-full lg:max-w-5xl md:px-24 lg:px-8">

            <h1 class="text-center font-sans text-3xl font-bold tracking-tight pt-10 pb-5">
                Our Members
            </h1>

            <div class="bg-white p-10 rounded shadow-lg mb-4">
                <vue-form form-class="flex flex-wrap" method="GET" action="{{route('members.index')}}">
                    <div class="w-full sm:w-1/3 px-5">
                        <p class="mb-0">Search</p>
                        <input-text name="search"
                                    default-value="{{$search['search']??''}}"
                                    placeholder="First name or last name"></input-text>
                    </div>
                    <div class="w-full sm:w-1/3 px-5">
                        <p class="mb-0">Industry</p>
                        <input-work-area name="work_area"
                                         default-value="{{$search['work_area']??''}}"
                                         :allow-any="true"
                                         default-value="all"
                                         placeholder="Industry"
                        ></input-work-area>
                    </div>
                    <div class="w-full sm:w-1/3 px-5">
                        <p class="mb-0">Country</p>
                        <input-country name="country_of_residence"
                                       default-value="{{$search['country_of_residence']??''}}"
                                       :allow-any="true"
                                       placeholder="Where do you live ?"
                                       default-value="all"
                        ></input-country>
                    </div>
                    <div class="w-full flex jusitfy-center mt-5 ">
                        <button class="rounded bg-blue-intami text-center px-5 py-3 text-bold text-white mx-auto"><span class="mr-3">🔍</span> Filter Members</button>
                        @if(($search['search']??false) || ($search['work_area']??false) ||
                        ($search['country_of_residence']??false) )
                            <a class="rounded bg-blue-intami text-center px-5 py-3 text-bold text-white mx-auto" href="{{route('members.index')}}"><span class="mr-3">🗑</span> Clear Filters</a>
                        @endif
                    </div>
                </vue-form>

                @if(($search['search']??false) || ($search['work_area']??false) ||
                        ($search['country_of_residence']??false) )
                    <p class="mt-3 text-center">{{$users->count()}} result(s).</p>
                @endif
            </div>

            <div class="flex flex-wrap">
                @foreach($users as $user)
                    <div class="w-full sm:w-1/2 lg:w-1/3 mb-5 px-2">
                        @include('components.members.user-card')
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($users->hasPages())
                <div class="pagination p-3">
                    <div class="pagination-content mx-auto">
                        {{ $users->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
