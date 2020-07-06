<?php

namespace App\Models;

use App\Events\ContactCreatedEvent;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'content',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ContactCreatedEvent::class,
    ];

    public function sender() {
        return $this->hasOne(User::class,'id','sender_id');
    }

    public function receiver() {
        return $this->hasOne(User::class,'id','receiver_id');
    }
}
