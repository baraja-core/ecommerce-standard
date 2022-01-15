<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface PaymentInterface
{
	public function getId(): int;

	public function getCode(): string;

	public function getPrice(): float;
}
