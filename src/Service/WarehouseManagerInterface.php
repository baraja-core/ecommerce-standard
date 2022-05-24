<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\ProductInterface;
use Baraja\EcommerceStandard\DTO\ProductVariantInterface;
use Baraja\EcommerceStandard\DTO\WarehouseCapacityInterface;
use Baraja\EcommerceStandard\DTO\WarehouseInterface;
use Baraja\EcommerceStandard\DTO\WarehouseItemAvailabilityInfoInterface;
use Baraja\EcommerceStandard\DTO\WarehouseItemInterface;
use Baraja\EcommerceStandard\DTO\WarehouseItemReservationInterface;

interface WarehouseManagerInterface
{
	/**
	 * @return array<int, WarehouseInterface>
	 */
	public function getWarehouses(): array;

	public function getMainWarehouse(): WarehouseInterface;

	public function getById(int $id): WarehouseInterface;

	public function createWarehouse(string $name): WarehouseInterface;

	public function getWarehouseItem(ProductInterface|ProductVariantInterface|WarehouseItemInterface|string $item): WarehouseItemInterface;

	public function createWarehouseItem(ProductInterface|ProductVariantInterface|string $item): WarehouseItemInterface;

	public function setLocation(WarehouseInterface $warehouse, ?string $location): void;

	public function getRealCapacity(ProductInterface|ProductVariantInterface|WarehouseItemInterface|string $item): int;

	public function getTotalCapacity(ProductInterface|ProductVariantInterface|WarehouseItemInterface|string $item): int;

	public function getReservedCapacity(ProductInterface|ProductVariantInterface|WarehouseItemInterface|string $item): int;

	public function getCapacity(WarehouseItemInterface $item, ?WarehouseInterface $warehouse = null): WarehouseCapacityInterface;

	public function reserveCapacity(
		ProductInterface|ProductVariantInterface|WarehouseItemInterface|string $item,
		int $quantity,
		?string $referenceHash = null,
		?\DateTimeInterface $expirationDate = null,
	): void;

	public function clearCapacityReservationByHash(string $hash): void;

	public function changeCapacity(
		ProductInterface|ProductVariantInterface|WarehouseItemInterface|WarehouseCapacityInterface|string $item,
		int $quantity,
		?WarehouseInterface $warehouse = null,
	): void;

	public function transformReservationToChangeCapacity(WarehouseItemReservationInterface|string $reservation): void;

	/**
	 * This function gets information about the actual availability of a specific product
	 * or variant based on the records in all warehouses.
	 * Real warehouse capacity shows the actual number of items across warehouses,
	 * which is reduced by the number of reserved items.
	 * All data is calculated in real time.
	 * When ordering multiple items, it may happen that an item is available in multiple
	 * warehouses and the order will need to be synchronized first.
	 *
	 * @return array<int, WarehouseItemAvailabilityInfoInterface>
	 */
	public function getItemAvailability(ProductInterface|ProductVariantInterface $item): array;
}
