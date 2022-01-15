<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ProductVariantInterface
{
	public function getId(): int;

	public function getProduct(): ProductInterface;

	public function getLabel(): string;

	public function getPrice(bool $useSale = true): float;
}
