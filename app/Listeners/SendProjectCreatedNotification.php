<?php

namespace BasicLaravel\Listeners;

use BasicLaravel\Events\ProjectCreated;
use BasicLaravel\Mail\ProjectCreated as ProjectCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class SendProjectCreatedNotification
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
     * @param  object  $event
     * @return void
     */
    public function handle(ProjectCreated $event)
    {
        Mail::to($event->project->user->email)->send(

            new ProjectCreatedMail($event->project)
        );
    }
}
