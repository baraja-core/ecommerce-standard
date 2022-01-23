<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\OrderInterface;

interface OrderNotificationSmsProviderInterface
{
	public function send(OrderInterface $order, string $content): void;
}
