<?php

namespace App\Http\Controllers;

use App\Models\Post;

class WomenController extends Controller
{
    const WOMEN_POST_TAG = 'members';

    public function index()
    {
        $posts = Post::with( ['tags','comments'] )
                         ->whereHas( 'tags', function ( $query ) {
                             $query->where( 'name', self::WOMEN_POST_TAG );
                         } )
                         ->live()
                         ->orderBy( 'publish_date', 'DESC' )
                         ->simplePaginate( 12 );

        return view( 'women.index', [
            'posts' => $posts
        ] );
    }

    public function show( $slug )
    {
        $this->middleware( 'auth' );

        $post = Post::with( 'tags' )
                        ->whereHas( 'tags', function ( $query ) {
                            $query->where( 'name', self::WOMEN_POST_TAG );
                        } )
                        ->live()
                        ->whereSlug( $slug )
                        ->firstOrFail();

        return view( 'women.show', compact( 'post' ) );
    }
}
