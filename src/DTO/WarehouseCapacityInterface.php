<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseCapacityInterface
{
	public function getId(): int;

	public function getWarehouse(): WarehouseInterface;

	public function getItem(): WarehouseItemInterface;

	public function getQuantity(): int;

	public function setQuantity(int $quantity): void;

	public function addQuantity(int $quantity): void;

	public function getLocation(): ?string;

	public function setLocation(?string $location): void;

	public function getUpdatedDate(): \DateTimeInterface;
}
