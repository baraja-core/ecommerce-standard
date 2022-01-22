<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


/**
 * Never storage money data as a float!
 * This object was created in response to the inaccurate storage of money and financial results in the inaccurate float type.
 * The internal implementation of this solution uses a string, which is safe for storing numbers.
 * It stores all the sums to 2 decimal places. Operations may be subject to rounding.
 */
interface PriceInterface extends \Stringable
{
	/** @return numeric-string */
	public function getValue(): string;

	public function getCurrency(): CurrencyInterface;

	/**
	 * Renders the amount passed, including any internal formatting.
	 * The rendering has two modes:
	 * - regular default mode (format to plaintext)
	 * - HTML mode (format ready to insert into HTML code including escaping)
	 */
	public function render(bool $html = false): string;

	public function isFree(): bool;

	public function getDiff(self|string $price): string;

	public function isBiggerThan(self|string $price): bool;

	public function isSmallerThan(self|string $price): bool;

	public function isEqualTo(self|string $price): bool;

	public function plus(self $price): self;

	public function minus(self $price): self;
}
