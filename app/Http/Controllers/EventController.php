<?php

namespace App\Http\Controllers;

use App\Models\Post;

class EventController extends Controller
{
    const EVENTS_POST_TAG = 'event';

    public function index()
    {
        $posts = Post::with( 'tags' )
                         ->whereHas( 'tags', function ( $query ) {
                             $query->where( 'name', self::EVENTS_POST_TAG );
                         } )
                         ->live()
                         ->orderBy( 'publish_date', 'DESC' )
                         ->simplePaginate( 12 );

        return view( 'events.index', [
            'posts' => $posts
        ] );
    }

    public function show( $slug )
    {
        // $this->middleware( 'auth' );

        $post = Post::with( ['tags','comments'] )
                        ->whereHas( 'tags', function ( $query ) {
                            $query->where( 'name', self::EVENTS_POST_TAG );
                        } )
                        ->live()
                        ->whereSlug( $slug )
                        ->firstOrFail();

        return view( 'events.show', compact( 'post' ) );
    }
}
