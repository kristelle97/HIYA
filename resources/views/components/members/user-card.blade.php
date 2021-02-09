<div class="pt-20 h-full">
    <div class="bg-white p-5 rounded shadow-lg w-full pt-20 relative h-full flex flex-col relative">
        <a href="{{route('members.show',['slug'=>$user->slug])}}">
            <span class="w-full h-full absolute inset-0 z-10"></span>
        </a>

        <img class="mx-auto w-32 rounded-full shadow absolute mx-auto inset-x-0	-top-16"
             src="{{$user->picture_url}}"/>
        @if($user->likeCount)
            <div class="like-container absolute top-6 flex justify-center inset-x-0">
                <div class="p-3 text-xs rounded-full font-semibold bg-white shadow ml-24">
                    {{$user->likeCount}} 👏
                </div>
            </div>
        @endif
        <div class="information flex-grow">
            <h5 class="text-center font-semibold text-xl">{{$user->full_name}}</h5>
            @if($user->country_of_residence)
                <p class="text-center mb-0 text-gray-600">{{$user->country_of_residence}}</p>
            @else
                <p class="text-center mb-0 text-gray-600">Location unknown</p>
            @endif

            @if($user->work_area && $user->job_position)
                <p class="text-center text-gray-600">"{{$user->job_position}}" in {{$user->work_area}} industry</p>
            @elseif($user->work_area)
                <p class="text-center text-gray-600">Working in {{$user->work_area}} industry</p>
            @elseif($user->job_position)
                <p class="text-center text-gray-600">"{{$user->job_position}}"</p>
            @else
                <p class="text-center text-gray-600">Job Position & Industry unknown</p>
            @endif
        </div>

        <div class="flex flex-col text-center mt-5 z-20">
            <vue-form class="flex-grow" form-class="d-inline" method="POST"
                      action="{{route('members.clap',['slug'=>$user->slug])}}">
                <button type="submit" class="w-full transition z-20
                    @if($user->liked())
                    hover:bg-white hover:text-blue-intami border border-blue-intami text-white bg-blue-intami
@else
                    hover:bg-blue-intami hover:text-white border border-gray-300 text-blue-intami
@endif
                    rounded px-4 py-2">
                    @if($user->liked())
                        <span class="mr-3">👏</span> Applauded
                    @else
                        <span class="mr-3">👏</span> Applaud
                    @endif
                </button>
            </vue-form>
            <a href="{{route('members.show',['slug'=>$user->slug])}}"
               class="transition border hover:border-blue-intami z-20 border-gray-300 hover:bg-blue-intami rounded px-4 py-2 hover:text-white flex-grow mt-3"><span
                    class="mr-3">✉️</span> Contact</a>
        </div>
    </div>
</div>
