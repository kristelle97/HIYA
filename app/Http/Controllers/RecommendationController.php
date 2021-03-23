<?php

namespace App\Http\Controllers;

use App\Models\Post;

class RecommendationController extends Controller
{
    const RECOMMENDATION_POST_TAG = 'recommendation';

    public function index()
    {
        $posts = Post::with( ['tags','comments'] )
                         ->whereHas( 'tags', function ( $query ) {
                             $query->where( 'name', self::RECOMMENDATION_POST_TAG );
                         } )
                         ->live()
                         ->orderBy( 'publish_date', 'DESC' )
                         ->simplePaginate( 12 );

        return view( 'recommendation.index', [
            'posts' => $posts
        ] );
    }

    public function show( $slug )
    {
        $this->middleware( 'auth' );

        $post = Post::with( 'tags' )
                        ->whereHas( 'tags', function ( $query ) {
                            $query->where( 'name', self::RECOMMENDATION_POST_TAG );
                        } )
                        ->live()
                        ->whereSlug( $slug )
                        ->firstOrFail();

        return view( 'recommendation.show', compact( 'post' ) );
    }
}
