<?php

namespace App\Listeners\EventListener\Mailable;

use App\User;
use App\Events\Mailable\MailTemplateUpdated;
use App\Mail\MailTemplateUpdated as UpdatedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class MailTemplateUpdateNotification
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
     * @param  MailTemplateUpdated  $event
     * @return void
     */
    public function handle(MailTemplateUpdated $event)
    {
        $users = User::all()->except($event->user->id);

        Mail::to($users)->send(new UpdatedMail($event));
    }
}
