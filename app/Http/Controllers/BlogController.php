<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with( 'tags' )
                     ->whereDoesntHave( 'tags', function ( $query ) {
                         $query->whereIn( 'name', [
                             JobController::JOBS_POST_TAG,
                             InterviewController::WOMEN_POST_TAG,
                             RecommendationController::RECOMMENDATION_POST_TAG,
                             EventController::EVENTS_POST_TAG
                             ] );
                     } )
                     ->live()
                     ->orderBy( 'publish_date', 'DESC' )
                     ->simplePaginate( 12 );

        return view( 'blog.index', [
            'posts' => $posts
        ] );
    }

    public function show( $slug )
    {
        // $this->middleware( 'auth' );

        $post = Post::with( ['tags','comments.author'] )
                    ->whereDoesntHave( 'tags', function ( $query ) {
                        $query->whereIn( 'name', [ JobController::JOBS_POST_TAG, InterviewController::WOMEN_POST_TAG ] );
                    } )->live()
                    ->whereSlug( $slug )
                    ->firstOrFail();

        return view( 'blog.show', compact( 'post' ) );
    }

    public function like( Request $request, $id )
    {
        $this->middleware( 'auth' );

        $post = Post::find( $id );
        if ( !$post ) {
            flash()->success('Post not found.');
            return redirect()->back();
        }

        if ($post->liked() ) {
            flash()->success('Post unliked.');
            $post->unlike();
        } else {
            flash()->success('Post liked.');
            $post->like();
        }

        return redirect()->back();
    }

    public function comment( Request $request, $id )
    {
        $this->middleware( 'auth' );

        $request->validate( [
            'content' => 'required|string'
        ] );

        $post = Post::find( $id );
        if ( !$post ) {
            flash()->success('Post not found.');
            return redirect()->back();
        }

        PostComment::create( [
            'user_id' => \Auth::id(),
            'post_id' => $post->id,
            'content' => $request->content
        ] );

        flash()->success('Comment published.');

        return redirect()->back();
    }

    public function likeComment( Request $request, $id )
    {
        $this->middleware( 'auth' );

        $comment = PostComment::find( $id );
        if ( !$comment ) {
            flash()->success('Comment not found.');
            return redirect()->back();
        }

        if ($comment->liked() ) {
            flash()->success('Comment unliked.');
            $comment->unlike();
        } else {
            flash()->success('Comment liked.');
            $comment->like();
        }

        return redirect()->back();
    }

    public function delete( $id )
    {
        $comment = PostComment::find( $id );
        if ( !$comment ) {
            flash()->success('Comment not found.');
            return redirect()->back();
        }

        if ($comment->author->id != \Auth::id() && !\Auth::user()->admin){
            flash()->warning('Unauthorized.');
            return redirect()->back();
        }

        $comment->delete();

        flash()->success('Comment deleted.');

        return redirect()->back();
    }
}
