<?php

namespace App\Models;

use Wink\WinkPost;

class Post extends WinkPost
{
    /**
     * Relationship
     */
    public function comments() {
        return $this->setConnection(config('database.default'))
                    ->hasMany(PostComment::class)
            ->orderBy('created_at','desc');
    }
}
