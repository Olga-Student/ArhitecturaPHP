<?php


namespace Strategy\WaysPai;

use Strategy\Contract\PayInterface;
class WebMoney implements PayInterface
{

    public function Pay(\Strategy\Entity\Order $order)
    {
        echo "Заказ номер {$order->getId()} суммой {$order->getTotalSum()} с телефона {$order->getPhoneNumber()} 
        оплачен системой WebMoney.";
    }
}