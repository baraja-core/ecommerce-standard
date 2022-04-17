<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CurrencyInterface;

interface CurrencyResolverInterface
{
	public function resolveCode(?string $locale = null): string;

	public function resolveEntity(?string $locale = null): CurrencyInterface;

	public function setCurrency(CurrencyInterface|string $currency): void;
}
