<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ExchangeRateInterface
{
	/**
	 * Maximal supported value is 2147483647 for 32-bit system and 9223372036854775807 for 6-bit system.
	 *
	 * @return int<1, max>
	 */
	public function getId(): int;

	public function getCurrencySource(): CurrencyInterface;

	public function getCurrencyTarget(): CurrencyInterface;

	public function getPair(): string;

	public function getDate(): \DateTimeInterface;

	public function getValue(): float;

	public function getBuy(): ?float;

	public function getSell(): ?float;

	public function getMiddle(): ?float;
}
