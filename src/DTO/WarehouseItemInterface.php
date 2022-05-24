<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseItemInterface
{
	public function getId(): int;

	public function getProduct(): ?ProductInterface;

	public function setProduct(?ProductInterface $product): void;

	public function getProductVariant(): ?ProductVariantInterface;

	public function setProductVariant(?ProductVariantInterface $productVariant): void;

	public function getSku(): ?string;

	public function setSku(?string $sku): void;

	public function getEan(): ?string;

	public function setEan(?string $ean): void;

	public function getTotalPurchasePrice(): ?float;

	public function setTotalPurchasePrice(?float $totalPurchasePrice): void;

	public function getMinSupply(): int;

	public function setMinSupply(int $minSupply): void;

	public function isQuantityCanBeNegative(): bool;

	public function setQuantityCanBeNegative(bool $quantityCanBeNegative): void;

	public function isActive(): bool;

	public function setActive(bool $active): void;

	public function getAvailableToDate(): ?\DateTimeInterface;

	public function setAvailableToDate(?\DateTimeInterface $availableToDate): void;

	public function getInsertedDate(): \DateTimeInterface;
}
