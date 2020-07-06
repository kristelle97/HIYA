<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MemberContactNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $firstName = $notifiable->first_name;
        $contactEmail = $this->contact->sender->email;
        $emailContent = $this->contact->content;

        return (new MailMessage)
            ->subject('A member contacted you')
            ->line( "One of our members contacted you. You can reply by sending her an email to:
                ${contactEmail}. Here is her message:" )
            ->line("\"${emailContent}\"");
    }
}
