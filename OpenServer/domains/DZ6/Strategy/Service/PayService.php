<?php

namespace Strategy\Service;

use Strategy\Contract\PayInterface;
use Strategy\Entity\Order;

class PayService
{
  public function sortPay(PayInterface $pay, Order $order)
  {
      return $pay->Pay($order);
  }
}