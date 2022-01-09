<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ProductInterface
{
	public function getLabel(): string;

	public function getWeight(): ?int;
}
