<?php


namespace Notification;

use Contract\SenderInterface;

class SameSender implements SenderInterface
{

    public function sendMessages($message)
    {
        return $message;
    }
}