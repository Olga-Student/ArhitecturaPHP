<?php


namespace Notification;


class SMSSender extends SenderDecorator
{

    public function sendMessages($message)
    {
        echo $message. ' отправлено SMS' . PHP_EOL;
        $this->object->sendMessages($message);
    }
}