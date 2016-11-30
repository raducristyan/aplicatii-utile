<?php

namespace App\Listeners;

use Mail;
use App\Mail\SendActivationToken;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationToken
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
     * Handle the event.
     *
     * @param  InstitutionCreated  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to($event->institution->users()->admin()->email)->send(new SendActivationToken($event->institution->token));
    }
}
