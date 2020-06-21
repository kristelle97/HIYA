@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-12">

                <h1 class="text-center">
                    Our Members
                </h1>

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
