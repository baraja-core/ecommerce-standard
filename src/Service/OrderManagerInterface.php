<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CartInterface;
use Baraja\EcommerceStandard\DTO\OrderInfoInterface;
use Baraja\EcommerceStandard\DTO\OrderInterface;

interface OrderManagerInterface
{
	public function createOrder(OrderInfoInterface $orderInfo, CartInterface $cart): OrderInterface;

	public function isPaid(OrderInterface $order): bool;
}
