<?php

namespace App\Listeners;

use App\Events\newChatMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendChatMessageNotification
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
     * @param  newChatMessage  $event
     * @return void
     */
    public function handle(newChatMessage $event)
    {
        //
    }
}
