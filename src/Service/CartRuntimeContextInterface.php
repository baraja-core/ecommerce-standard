<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


interface CartRuntimeContextInterface
{
	public function getFreeDeliveryResolver(): FreeDeliveryResolverInterface;

	public function getFreeDeliveryLimit(): int;

	public function setFreeDeliveryLimit(int $freeDeliveryLimit): void;
}
