<?php

namespace App\Listeners;

use App\Article\After;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddArticleAfter
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
     * @param  After  $event
     * @return void
     */
    public function handle(After $event)
    {
        $request = $event->getRequest();
    }
}
