<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ProductVariantInterface
{
	public function getId(): int;

	public function getProduct(): ProductInterface;

	public function getLabel(): string;

	public function getName(): string;

	/**
	 * @return numeric-string
	 */
	public function getPrice(bool $useSale = true): string;

	public function getCode(): ?string;

	public function getEan(): ?string;

	public function getRelationHash(): string;

	public function getWarehouseAllQuantity(): int;
}
