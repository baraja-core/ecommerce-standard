<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CurrencyInterface
{
	public function getId(): int;

	/**
	 * Renders the amount passed, including any internal formatting.
	 * The rendering has two modes:
	 * - regular default mode (format to plaintext)
	 * - HTML mode (format ready to insert into HTML code including escaping)
	 */
	public function renderPrice(float $price, bool $html = false): string;

	public static function normalizeCode(string $code): string;

	public function getCode(): string;

	public function getSymbol(): string;

	public function isMain(): bool;

	public function isActive(): bool;

	public function getLocale(): ?string;
}
