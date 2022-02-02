<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CurrencyInterface;
use Baraja\EcommerceStandard\DTO\ExchangeRateInterface;
use Baraja\EcommerceStandard\DTO\PriceInterface;

interface ExchangeRateConvertorInterface
{
	/**
	 * @param PriceInterface|numeric-string $price
	 * @return numeric-string
	 */
	public function convert(
		PriceInterface|string $price,
		CurrencyInterface|string $source,
		CurrencyInterface|string $target,
		?\DateTimeInterface $date = null,
	): string;

	public function getRateToday(
		CurrencyInterface|string $source,
		CurrencyInterface|string $target,
	): ExchangeRateInterface;

	public function getRate(
		CurrencyInterface|string $source,
		CurrencyInterface|string $target,
		\DateTimeInterface $date,
	): ExchangeRateInterface;
}
