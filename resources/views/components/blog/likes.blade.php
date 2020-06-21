<div class="likes mb-4 mb-sm-0">
    @if(Auth::check())
        <vue-form methode="POST" action="{{route('post.like',$post->id)}}" class="d-inline">
            <button class="btn btn-sm btn-outline-dark" type="submit">
                @if($post->liked())
                    <i class="fas fa-thumbs-down"></i> Unlike
                @else
                    <i class="fas fa-thumbs-up"></i> Like
                @endif
            </button>
        </vue-form>
    @endif
    {{$post->likeCount}} Like(s)
</div>
