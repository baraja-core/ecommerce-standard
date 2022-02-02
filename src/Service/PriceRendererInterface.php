<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\PriceInterface;

interface PriceRendererInterface
{
	public function render(
		PriceInterface|float|string $price,
		?string $locale = null,
		?string $target = null,
		?string $source = null,
	): string;

	public function getFreeLabel(): string;
}
