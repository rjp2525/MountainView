<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactForm;

class ContactFormSubmit extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Stores the data from the contact form submission.
     *
     * @var \App\Models\ContactForm
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactForm $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data->email)
                    ->replyTo($this->data->email)
                    ->subject('[CONTACT US] ' . $this->data->subject)
                    ->markdown('mail.contactus');
    }
}
