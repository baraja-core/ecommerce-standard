<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CartInterface;
use Baraja\EcommerceStandard\DTO\CustomerInterface;
use Baraja\EcommerceStandard\DTO\PriceInterface;

interface FreeDeliveryResolverInterface
{
	public function isFreeDelivery(CartInterface $cart, ?CustomerInterface $customer = null): bool;

	public function getMinimalPrice(?CartInterface $cart = null, ?CustomerInterface $customer = null): PriceInterface;

	public function getDefaultMinimalPrice(): PriceInterface;
}
