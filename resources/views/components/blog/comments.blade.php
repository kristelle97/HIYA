<div class="comments">
    @if(count($post->comments))
        <div class="published-comments mb-4">
            <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach($post->comments as $comment)

                        <li class="list-group-item">
                            <p class="mb-0">
                                <img src="{{$comment->author->picture_url}}" class="author-picture"/>
                                <b>{{$comment->author->full_name}}</b> -
                                <span class="text-secondary">{{$comment->created_at->diffForHumans()}}</span></p>
                            <p class="mb-0">
                                {{$comment->content}}
                            </p>
                            <div class="d-flex mt-4">
                                @include('components.blog.comment-likes')

                                @if($comment->author->id == \Auth::id() || \Auth::user()->admin)
                                    <vue-form class="text-right" method="delete" action="{{route('post.comment.delete',[
                                    'id' => $comment->id
                                ])}}">
                                        <button type="submit" class="btn btn-link">Delete</button>
                                    </vue-form>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <vue-form method="POST" action="{{route('post.comment',[
                    'id' => $post->id
                ])}}">
        <input-textarea
            name="content"
            placeholder="Your Comment"
        ></input-textarea>
        <p class="text-right">
            <button class="btn btn-outline-primary">Publish Comment</button>
        </p>
    </vue-form>
</div>
