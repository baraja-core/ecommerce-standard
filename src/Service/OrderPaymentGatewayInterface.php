<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\OrderGatewayResponseInterface;
use Baraja\EcommerceStandard\DTO\OrderInterface;

interface OrderPaymentGatewayInterface
{
	public function pay(OrderInterface $order): OrderGatewayResponseInterface;

	public function getPaymentMethodCode(): string;

	public function getPaymentStatus(OrderInterface $order): string;

	public function checkPaymentStatus(OrderInterface $order, ?string $id = null): OrderGatewayResponseInterface;
}
