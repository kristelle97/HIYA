@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12 mb-5">

                <h1 class="text-center">
                    Our Members
                </h1>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5>Filters</h5>
                        <vue-form form-class="row" method="GET" action="{{route('members.index')}}">
                            <div class="col-md-4 col-12">
                                <p class="mb-0">Search</p>
                                <input-text name="search"
                                            default-value="{{$search['search']??''}}"
                                            placeholder="First name or last name"></input-text>
                            </div>
                            <div class="col-md-4 col-12">
                                <p class="mb-0">Industry</p>
                                <input-work-area name="work_area"
                                                 default-value="{{$search['work_area']??''}}"
                                                 :allow-any="true"
                                                 default-value="all"
                                                 placeholder="Industry"
                                ></input-work-area>
                            </div>
                            <div class="col-md-4 col-12">
                                <p class="mb-0">Country</p>
                                <input-country name="country_of_residence"
                                               default-value="{{$search['country_of_residence']??''}}"
                                               :allow-any="true"
                                               placeholder="Where do you live ?"
                                               default-value="all"
                                ></input-country>
                            </div>
                            <div class="col-12 text-center d-inline">
                                <button class="btn btn-outline-primary">🔍 Filter Members</button>
                                @if(($search['search']??false) || ($search['work_area']??false) ||
                                ($search['country_of_residence']??false) )
                                    <a class="btn btn-outline-secondary" href="{{route('members.index')}}">🗑 Clear Filters</a>
                                @endif
                            </div>
                        </vue-form>

                        @if(($search['search']??false) || ($search['work_area']??false) ||
                                ($search['country_of_residence']??false) )
                            <p class="mt-3 text-center">{{$users->count()}} result(s).</p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    @foreach($users as $user)
                        <div class="col-12 col-md-6 col-lg-4">
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
    </div>
@endsection
