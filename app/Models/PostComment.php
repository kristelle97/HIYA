<?php

namespace App\Models;

use App\User;
use Conner\Likeable\Like;
use Conner\Likeable\Likeable;
use Conner\Likeable\LikeCounter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use Likeable;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relationships
     */
    public function post() {
        return $this->setConnection('wink')->belongsTo(Post::class);
    }

    public function author() {
        return $this->hasOne(User::class,'id','user_id');
    }

}
