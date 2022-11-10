<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface BrandInterface
{
	public function getId(): int;

	public function getName(): string;

	public function getCode(): string;

	public function getRealDescription(): string;

	public function getSlug(): string;

	public function getIconPath(): ?string;

	public function getPosition(): int;

	public function isActive(): bool;

	public function setActive(bool $active): void;

	public function isShowInFeed(): bool;

	public function isB2b(): bool;

	public function isDeleted(): bool;

	public function getCountry(): ?CountryInterface;

	public function setCountry(?CountryInterface $country): void;
}
