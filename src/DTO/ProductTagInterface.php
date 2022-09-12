<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ProductTagInterface
{
	public function getId(): int;

	public function getSlug(): string;

	public function setSlug(string $slug): void;

	public function getLabel(): string;

	public function getImageUrl(): ?string;

	public function setImageUrl(?string $imageUrl): void;

	public function getColor(): ?string;

	public function setColor(?string $color): void;

	public function isShowOnCard(): bool;

	public function setShowOnCard(bool $showOnCard): void;

	public function isFreeDelivery(): bool;

	public function setFreeDelivery(bool $freeDelivery): void;

	public function addProduct(ProductInterface $product): void;

	public function removeProduct(ProductInterface $product): void;
}
