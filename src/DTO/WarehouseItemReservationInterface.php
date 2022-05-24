<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseItemReservationInterface
{
	public function getId(): int;

	public function getCapacity(): WarehouseCapacityInterface;

	public function getReferenceHash(): ?string;

	public function getQuantity(): int;

	public function getExpirationDate(): ?\DateTimeInterface;

	public function setExpirationDate(?\DateTimeInterface $expirationDate): void;

	public function getInsertedDate(): \DateTimeInterface;
}
