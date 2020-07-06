<?php

namespace App\Listeners;

use App\Events\ContactCreatedEvent;
use App\Notifications\MemberContactNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContactCreatedListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ContactCreatedEvent $event)
    {
        $receiver = $event->contact->receiver;
        $receiver->notify(new MemberContactNotification($event->contact));
    }
}
