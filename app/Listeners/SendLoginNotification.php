<?php

namespace App\Listeners;

use Auth;
use App\Mail\UserMail;
use App\Events\LoginProcessed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendLoginNotification
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
     * @param  \App\Events\LoginProcessed  $event
     * @return void
     */
    public function handle(LoginProcessed $event)
    {
        Mail::to(Auth::user()->email)->send(new UserMail($event->login));
    }
}
