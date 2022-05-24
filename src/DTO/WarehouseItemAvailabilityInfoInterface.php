<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseItemAvailabilityInfoInterface
{
	public function getWarehouse(): WarehouseInterface;

	public function getWarehouseItem(): WarehouseItemInterface;

	public function getWarehouseCapacity(): WarehouseCapacityInterface;
}
