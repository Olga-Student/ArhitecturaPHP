<?php


namespace Notification;


class EmailSender extends SenderDecorator
{

    public function sendMessages($message)
    {
        echo $message. ' отправлено на email' . PHP_EOL;
        $this->object->sendMessages($message);
    }
}