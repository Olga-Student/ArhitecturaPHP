<?php

namespace Notification;

use Contract\SenderInterface;
use Notification\EmailSender;
use Notification\SameSender;
use Notification\SenderDecorator;
use Notification\SMSSender;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$message = new EmailSender(new SMSSender(new SameSender()));
$message->sendMessages('Привет всем');