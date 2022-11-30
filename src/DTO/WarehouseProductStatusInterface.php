<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseProductStatusInterface
{
	public function isAvailable(): bool;

	public function isAvailableOnBranch(): bool;

	public function getProductId(): ?string;

	public function getProductVariantId(): ?int;

	public function getAvailableQuantity(): int;

	public function getExpectedDeliveryDate(): ?\DateTimeInterface;

	public function getUpdatedDate(): \DateTimeInterface;
}
