<div class="flex items-center">
    @if(Auth::check())
        <vue-form methode="POST" action="{{route('post.comment.like',$comment->id)}}" class="">
            <button class="btn btn-sm btn-outline-dark" type="submit">
                @if($comment->liked())
                    <span class="mr-3">👎</span> Unlike
                @else
                    <span class="mr-3">👍</span> Like
                @endif
            </button>
        </vue-form>
    @endif
    <p class="ml-1">- {{$comment->likeCount}} Like(s)</p>
</div>
