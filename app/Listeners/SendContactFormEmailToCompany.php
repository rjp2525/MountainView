<?php

namespace App\Listeners;

use App\Events\ContactFormSubmit;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\ContactFormSubmit as ContactFormSubmitEmail;
use Illuminate\Support\Facades\Mail;

class SendContactFormEmailToCompany
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Send the email to the company after the user submits the form.
     *
     * @param  ContactFormSubmit  $event
     * @return void
     */
    public function handle(ContactFormSubmit $event)
    {
        $cc = explode(',', env('ADMIN_EMAILS'));

        Mail::to('contact@mtnview.email')->cc($cc)->send(new ContactFormSubmitEmail($event->data));
    }
}
