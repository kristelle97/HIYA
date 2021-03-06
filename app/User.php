<?php

namespace App;

use App\Models\PostComment;
use Conner\Likeable\Like;
use Conner\Likeable\Likeable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use phpDocumentor\Reflection\Types\Self_;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class User extends Authenticatable implements MustVerifyEmail, CanResetPassword
{
    use Notifiable, HasSlug, Likeable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',

        'picture_url',
        'description',
        'work_area',
        'job_position',
        'country_of_residence'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Mutators
     */

    public function getPictureUrlAttribute()
    {
        $url = $this->attributes['picture_url'];
        if ($url == null || $url == '') {
            return '/img/avatar-placeholder.jpg';
        }
        return asset($url);
    }

    /**
     * Others (Slugs...)
     */

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['first_name', 'last_name'])
            ->saveSlugsTo('slug');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Relationships
     */
    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function applaudedBy()
    {
        if ($this->likeCount == 0) {
            return collect();
        }

        $likersIds = Like::where('likeable_id',$this->id)
            ->where('likeable_type',self::class)
            ->get('user_id')->pluck('user_id');
        return User::find($likersIds);
    }
}
