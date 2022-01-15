<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CategoryInterface
{
	public function getId(): int;

	public function getLabel(): string;
}
