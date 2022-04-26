<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CartVoucherInterface
{
	public function getId(): int;

	public function getType(): string;

	/**
	 * @return numeric-string
	 */
	public function getValue(): string;
}
