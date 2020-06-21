<div class="likes flex-grow-1">
    @if(Auth::check())
        <vue-form methode="POST" action="{{route('post.comment.like',$comment->id)}}" class="d-inline">
            <button class="btn btn-sm btn-outline-dark" type="submit">
                @if($comment->liked())
                    <i class="fas fa-thumbs-down"></i> Unlike
                @else
                    <i class="fas fa-thumbs-up"></i> Like
                @endif
            </button>
        </vue-form>
    @endif
    {{$comment->likeCount}} Like(s)
</div>
