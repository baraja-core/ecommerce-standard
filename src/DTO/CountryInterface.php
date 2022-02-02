<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CountryInterface
{
	public function getId(): int;

	public function getName(): string;

	public function getIsoCode(): string;

	public function getCode(): string;

	public function isActive(): bool;
}
