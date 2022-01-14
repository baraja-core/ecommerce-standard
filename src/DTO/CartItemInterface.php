<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CartItemInterface
{
	public function getId(): int;

	public function getCart(): CartInterface;

	public function getProduct(): ProductInterface;

	public function getVariant(): ?ProductVariantInterface;

	public function getCount(): int;

	public function setCount(int $count): void;

	public function getMainImageRelativePath(): ?string;

	public function getName(): string;

	public function getBasicPrice(): PriceInterface;

	public function getPrice(): PriceInterface;

	public function getPriceWithoutVat(): PriceInterface;

	public function getDescription(): string;

	public function addCount(int $count): void;

	public function isActive(): bool;
}
