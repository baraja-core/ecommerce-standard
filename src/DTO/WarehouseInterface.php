<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface WarehouseInterface
{
	public function getId(): int;

	public function getLabel(): string;

	public function getLocation(): ?string;

	public function setLocation(?string $location): void;

	public function getLatitude(): ?float;

	public function setLatitude(?float $latitude): void;

	public function getLongitude(): ?float;

	public function setLongitude(?float $longitude): void;

	public function isMain(): bool;

	public function setMain(bool $main): void;

	public function isQuantityCanBeNegative(): bool;

	public function setQuantityCanBeNegative(bool $quantityCanBeNegative): void;

	public function getDefaultMinimalQuantity(): int;

	public function setDefaultMinimalQuantity(int $defaultMinimalQuantity): void;
}
