<div class="likes flex items-center flex-row-reverse">
    @if(Auth::check())
        <vue-form methode="POST" action="{{route('post.like',$post->id)}}" class="d-inline">
            <button class="transition border-2 hover:border-blue-intami border-gray-300 hover:bg-blue-intami rounded px-8 py-2 hover:text-white" type="submit">
                @if($post->liked())
                    <span class="mr-3">👎</span> Unlike
                @else
                    <span class="mr-3">👍</span> Like
                @endif
            </button>
        </vue-form>
    @endif
    <p class="mr-3">
    {{$post->likeCount}} Like(s)
    </p>
</div>
