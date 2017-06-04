<?php

namespace App\Listeners;

use App\Article\Before;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddArticleBefore
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
     * @param  Before  $event
     * @return void
     */
    public function handle(Before $event)
    {
        dump('hello2');
    }
}
