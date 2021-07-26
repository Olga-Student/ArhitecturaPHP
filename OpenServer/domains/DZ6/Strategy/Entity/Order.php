<?php
namespace Strategy\Entity;

class Order
{
    private $id;
    private $totalSum;
    private $phoneNumber;


  public function getId()
  {
      return $this->id;
  }

  public function getTotalSum()
  {
      return $this->totalSum;
  }

  public function getPhoneNumber()
  {
      return $this->phoneNumber;
  }


}