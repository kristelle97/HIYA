<div class="user-card card">
    <img class="mx-auto d-block mb-3 user-image shadow" src="{{$user->picture_url}}"/>

    <div class="card-body d-flex flex-column">

        <div class="information flex-grow-1">
            <h5 class="text-center">{{$user->full_name}}</h5>
            @if($user->country_of_residence)
                <p class="text-center mb-0">{{$user->country_of_residence}}</p>
            @else
                <p class="text-center mb-0">Location unknown</p>
            @endif

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
        </div>

        <div class="actions text-center">
            <vue-form class="d-inline" form-class="d-inline" method="POST"
                      action="{{route('members.clap',['slug'=>$user->slug])}}">
                <button type="submit" class="btn btn-outline-secondary">
                    @if($user->liked())
                        👏 Un-Applaude
                    @else
                        👏 Applaude
                    @endif
                </button>
            </vue-form>
            <a href="{{route('members.show',['slug'=>$user->slug])}}" class="btn btn-outline-secondary">✉️ Contact</a>
        </div>
    </div>
</div>
