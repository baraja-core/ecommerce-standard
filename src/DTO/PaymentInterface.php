<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface PaymentInterface
{
	public function getId(): int;

	public function getName(): string;

	public function getCode(): string;

	public function getDescription(): ?string;

	/** @return numeric-string */
	public function getPrice(): string;

	public function getColor(): ?string;

	public function getAuthorizatorKey(): ?string;
}
