<?php
namespace Strategy;


use Strategy\Entity\Order;
use Strategy\Service\PayService;
use Strategy\WaysPai\Qiwi;
use Strategy\WaysPai\Yandex;
use Strategy\WaysPai\WebMoney;

$order1 = new Order(1, 5000, 89209302966);
$order2 = new Order(2, 10000, 8900000000);
$order3 = new Order(3, 1000, 8222222222);

$waypai = new PayService();

$waypai->sortPay(new Qiwi(), $order1);
$waypai->sortPay(new Yandex(), $order2);
$waypai->sortPay(new WebMoney(), $order3);
