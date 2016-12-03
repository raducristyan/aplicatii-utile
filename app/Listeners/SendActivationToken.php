<?php

namespace App\Listeners;

use Mail;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\SendActivationEmail;
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
        $user = $event->institution->users()->admin()->first();
        $user->notify(new SendActivationEmail($event->institution->token));
    }
}
