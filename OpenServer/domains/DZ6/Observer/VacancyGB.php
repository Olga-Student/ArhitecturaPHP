<?php
namespace Observer;

use SplObserver;
class VacancyGB implements \SplSubject
{
    public $vacancyName;
    public $salary;
    public $description;
    private $observer;

    public function __construct($vacancyName, $salary, $description)
    {
        $this->name = $vacancyName;
        $this->salary = $salary;
        $this->description = $description;
        $this->observer = new \SplObjectStorage();

    }
    public function getVacancyName()
    {
        return $this->vacancyName;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function attach(SplObserver $observer)
    {
        $user = $observer->getUser();
        echo "Пользователь {$user->getName()} подписан на получение вакансии {$this->vacancyName}.";
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $user = $observer->getUser();
        echo "Пользователь {$user->getName()} отписан на получение вакансии {$this->vacancyName}.";
        $this->observer->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}