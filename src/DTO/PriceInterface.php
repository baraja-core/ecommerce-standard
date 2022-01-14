<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface PriceInterface extends \Stringable
{
	public function getValue(): float;

	public function getCurrency(): CurrencyInterface;

	/**
	 * Renders the amount passed, including any internal formatting.
	 * The rendering has two modes:
	 * - regular default mode (format to plaintext)
	 * - HTML mode (format ready to insert into HTML code including escaping)
	 */
	public function render(bool $html = false): string;

	public function isFree(): bool;

	public function getDiff(self|float $price): float;
}
