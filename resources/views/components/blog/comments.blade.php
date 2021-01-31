<div class="flex flex-col">
    @if(count($post->comments))
        <div class="published-comments mb-4">
            <ul class="list-group list-group-flush">
                @foreach($post->comments as $comment)

                    <li class="w-full flex flex-col py-5 border-b-2 border-gray-300">
                        <a class="flex items-center" href="{{route('members.show',[$comment->author->slug])}}">
                            <img src="{{$comment->author->picture_url}}" class="w-12 h-12 rounded-full"/>
                            <div class="flex flex-col ml-3">
                                <p>{{$comment->author->full_name}}</p>
                                <p class="text-secondary text-xs flex">{{$comment->created_at->diffForHumans()}}
                                    @if($comment->author->id == \Auth::id() || \Auth::user()->admin) -
                                        <vue-form class="text-right ml-2" method="delete" action="{{route('post.comment.delete',[
                                    'id' => $comment->id
                                ])}}">
                                            <button type="submit"
                                                    class="text-red-500 hover:underline">
                                                Delete
                                            </button>
                                        </vue-form>
                                    @endif</p>
                            </div>
                        </a>
                        <p class="mt-4">
                            {{$comment->content}}
                        </p>
                        <div class="flex flex-row-reverse mt-4">
                            @include('components.blog.comment-likes')
                        </div>
                    </li>
                @endforeach
            </ul>
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
            <button
                class="transition border-2 hover:border-blue-intami border-gray-300 hover:bg-blue-intami rounded px-8 py-2 hover:text-white">
                Publish Comment
            </button>
        </p>
    </vue-form>
</div>
