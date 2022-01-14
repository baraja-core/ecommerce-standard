<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface DeliveryInterface
{
	public function getId(): int;

	public function getCode(): string;

	public function getDescription(): ?string;

	public function getPrice(): int;

	public function getColor(): ?string;

	public function getBotShipper(): ?string;

	public function getBotServiceType(): ?string;

	public function getCarrier(): ?string;

	public function getAuthorizatorKey(): ?string;

	public function getCountry(): CountryInterface;
}
