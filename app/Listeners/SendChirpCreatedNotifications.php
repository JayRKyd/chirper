<?php

namespace App\Listeners;
use App\Models\User;
use App\Notifications\NewChirp;
use App\Events\ChirpCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendChirpCreatedNotifications implements ShouldQueue
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
     * @param  \App\Events\ChirpCreated  $event
     * @return void
     */
    public function handle(ChirpCreated $event)
    {
        //
    }
}