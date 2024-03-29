<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ProductInterface
{
	public function getId(): int;

	public function getCode(): string;

	public function getEan(): ?string;

	public function getSlug(): string;

	public function getLabel(): string;

	/** @return numeric-string */
	public function getPrice(): string;

	/** @return numeric-string */
	public function getStandardPrice(): string;

	/** @return numeric-string */
	public function getSalePrice(): string;

	public function isSale(): bool;

	/** @return numeric-string|null */
	public function getStandardPricePercentage(): ?string;

	public function getPosition(): int;

	public function isActive(): bool;

	public function isShowInFeed(): bool;

	public function isSoldOut(): bool;

	public function getMainCategory(): ?CategoryInterface;

	public function getMainImage(): ?ImageInterface;

	public function isVariantProduct(): bool;

	/** @return numeric-string */
	public function getVat(): string;

	public function getMaximalSize(): ?float;

	public function getMinimalSize(): ?float;

	public function getSizeWidth(): ?float;

	public function setSizeWidth(?float $value): void;

	public function getSizeLength(): ?float;

	public function setSizeLength(?float $value): void;

	public function getSizeThickness(): ?float;

	public function setSizeThickness(?float $value): void;

	public function getWeight(): ?int;

	public function setWeight(?int $value): void;

	/** @return array<int, CategoryInterface> */
	public function getCategories(): array;

	/** @return array<int, ProductTagInterface> */
	public function getTags(): array;

	public function getWarehouseAllQuantity(): int;

	public function getManufacturer(): ?ManufacturerInterface;

	public function getBrand(): ?BrandInterface;
}
