<?php

namespace App\Events\Mailable;

use App\User;
use App\MailTemplate;
use App\Traits\Mailable;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Auth;

class MailTemplateUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels, Mailable;

    public $user;
    public $template;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($template)
    {
        $this->user = Auth::user();
        $this->template = $template;

        // Mailable Trait
        $this->setMailContent();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}