<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface DeliveryInterface
{
	public function getId(): int;

	public function getLabel(): string;

	public function getCode(): string;

	public function getDescription(): ?string;

	/** @return numeric-string */
	public function getPrice(): string;

	public function getColor(): ?string;

	public function getBotShipper(): ?string;

	public function getBotServiceType(): ?string;

	public function getCarrier(): ?string;

	public function getCountry(): CountryInterface;
}
