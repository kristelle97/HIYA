<?php

namespace App\Http\Controllers;

use App\Models\Post;

class JobController extends Controller
{
    const JOBS_POST_TAG = 'jobs';

    public function index()
    {
        $posts = Post::with( 'tags' )
                         ->whereHas( 'tags', function ( $query ) {
                             $query->where( 'name', self::JOBS_POST_TAG );
                         } )
                         ->live()
                         ->orderBy( 'publish_date', 'DESC' )
                         ->simplePaginate( 12 );

        return view( 'jobs.index', [
            'posts' => $posts
        ] );
    }

    public function show( $slug )
    {
        // $this->middleware( 'auth' );

        $post = Post::with( ['tags','comments'] )
                        ->whereHas( 'tags', function ( $query ) {
                            $query->where( 'name', self::JOBS_POST_TAG );
                        } )
                        ->live()
                        ->whereSlug( $slug )
                        ->firstOrFail();

        return view( 'jobs.show', compact( 'post' ) );
    }
}
