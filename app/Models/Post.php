<?php

namespace App\Models;

use Conner\Likeable\Like;
use Conner\Likeable\Likeable;
use Conner\Likeable\LikeCounter;
use Wink\WinkPost;

class Post extends WinkPost
{
    use Likeable;

    /**
     * Relationship
     */
    public function comments() {
        return $this->setConnection(config('database.default'))
                    ->hasMany(PostComment::class)
            ->orderBy('created_at','desc');
    }

    /**
     * Collection of the likes on this record
     * @access private
     */
    public function likes()
    {
        return $this->setConnection(config('database.default'))
                    ->morphMany(Like::class, 'likeable');
    }

    /**
     * Counter is a record that stores the total likes for the
     * morphed record
     * @access private
     */
    public function likeCounter()
    {
        return $this->setConnection(config('database.default'))
                    ->morphOne(LikeCounter::class, 'likeable');
    }
}
