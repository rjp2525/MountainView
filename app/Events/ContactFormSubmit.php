<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactForm;

class ContactFormSubmit
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The contact form data that was submitted to the database.
     *
     * @var \App\Models\ContactForm
     */
    public $data;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ContactForm $data)
    {
        $this->data = $data;
    }

    /**
     * Get the channels that the event should broadcast on.
     *
     * TODO: Broadcast this event onto a private channel to use with Laravel Echo
     *       so that administrators can receeive live updates when people submit
     *       a contact form request.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    /**public function broadcastOn()
    {
        return [];
    }**/
}
