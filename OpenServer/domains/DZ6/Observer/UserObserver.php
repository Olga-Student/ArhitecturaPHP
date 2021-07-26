<?php
namespace Observer;

use Observer\User;
use Observer\VacancyGB;
use SplSubject;
class UserObserver implements \SplObserver
{
    private User $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function update(SplSubject $subject)
    {
        echo "Уважаемый {$this->user->getName()}, Вам предложена следующая вакансия '{$subject->getVacancyName()}', 
        основные требования '{$subject->getDescription()}', заработная плата '{$subject->getSalary()}'";
    }
}