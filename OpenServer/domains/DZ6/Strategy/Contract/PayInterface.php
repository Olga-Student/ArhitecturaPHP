<?php
namespace Strategy\Contract;

interface PayInterface
{
    public function Pay(\Strategy\Entity\Order $order);

}