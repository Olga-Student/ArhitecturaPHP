<?php

namespace Notification;

use Contract\SenderInterface;

abstract class SenderDecorator implements SenderInterface
{
  protected $object;

  public function __construct(SenderInterface $object)
  {
      $this->object = $object;
  }
}