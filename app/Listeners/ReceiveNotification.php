<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\NotificationSender;
use App\Models\Lecturer;
use App\Models\Student;
use App\Models\RoomCourse;

class ReceiveNotification
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
    public function handle(NotificationSender $event)
    {
        $lecturer=Lecturer::find($event->lecturer['id']);

        return redirect()->route('lecturerroom',compact('lecturer'));
    }
}
