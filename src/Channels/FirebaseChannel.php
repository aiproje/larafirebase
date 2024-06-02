<?php

namespace dev0ehab\Larafirebase\Channels;

use Illuminate\Notifications\Notification;

class FirebaseChannel
{
    /**
     * Send the given notification.
     */
    public function send($notifiable, Notification $notification)
    {
        /** @var \dev0ehab\Larafirebase\FirebaseMessage $message */
        $message = $notification->toFirebase($notifiable);
    }
}
