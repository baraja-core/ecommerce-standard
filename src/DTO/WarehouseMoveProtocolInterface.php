<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseMoveProtocolInterface
{
	public function getId(): int;

	public function getCapacity(): WarehouseCapacityInterface;

	public function getQuantity(): int;

	public function getUpdatedDate(): \DateTimeInterface;
}
