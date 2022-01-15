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

	public function getPrice(): float;

	public function getStandardPrice(): float;

	public function getSalePrice(): float;

	public function isSale(): bool;

	public function getStandardPricePercentage(): ?float;

	public function getPosition(): int;

	public function isActive(): bool;

	public function isShowInFeed(): bool;

	public function isSoldOut(): bool;

	public function getMainCategory(): ?CategoryInterface;

	public function getMainImage(): ?ImageInterface;

	public function isVariantProduct(): bool;

	public function getVat(): float;

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
}
