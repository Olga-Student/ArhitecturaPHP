<?php
namespace Observer;

use Observer\User;
use Observer\UserObserver;
use Observer\VacancyGB;

$user1 = new User('Vasya', 'vasya@mail.ru', 10);
$user2 = new User('Kolya', 'kolya@mail.ru', 5);

$vacancy = new VacancyGB('Frem', 50000, 'Владение языком PHP');

$observer1 = new UserObserver($user1);
$vacancy->attach($observer1);
echo PHP_EOL;

$observer2 = new UserObserver($user2);
$vacancy->attach($observer2);
echo PHP_EOL;

$vacancy->notify();
$vacancy->detach();