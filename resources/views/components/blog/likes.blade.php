<div class="likes mb-4 mb-sm-0">
    @if(Auth::check())
        <vue-form methode="POST" action="{{route('post.like',$post->id)}}" class="d-inline">
            <button class="btn btn-sm btn-outline-dark" type="submit">
                @if($post->liked())
                    👎 Unlike
                @else
                    👍 Like
                @endif
            </button>
        </vue-form>
    @endif
    {{$post->likeCount}} Like(s)
</div>
