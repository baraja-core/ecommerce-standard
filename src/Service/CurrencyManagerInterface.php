<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CurrencyInterface;
use Baraja\EcommerceStandard\DTO\ExchangeRateInterface;

interface CurrencyManagerInterface
{
	public function getMainCurrency(): CurrencyInterface;

	public function setMainCurrency(CurrencyInterface|string $currency): void;

	public function getRateToday(
		CurrencyInterface|string $source,
		CurrencyInterface|string $target,
	): ExchangeRateInterface;

	public function getRate(
		CurrencyInterface|string $source,
		CurrencyInterface|string $target,
		\DateTimeInterface $date,
	): ExchangeRateInterface;

	/**
	 * @return array<int, CurrencyInterface>
	 */
	public function getCurrencies(): array;

	public function getCurrency(CurrencyInterface|string $code): CurrencyInterface;

	public function getByLocale(string $locale): CurrencyInterface;

	public function createCurrency(string $code, string $symbol): CurrencyInterface;
}
