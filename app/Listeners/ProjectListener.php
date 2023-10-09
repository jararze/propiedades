<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewProject;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class ProjectListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        User::whereNotIn('id', function ($query) use ($event) {
            $query->select('created_by')
                ->from('properties')
                ->where('id', $event->property->id);
        })
            ->where(function ($query) {
                $query->where('role', 'admin')
                    ->orWhere('role', 'agent');
            })
            ->each(function (User $user) use ($event) {
                Notification::send($user, new NewProject($event->property));
            });

    }
}
