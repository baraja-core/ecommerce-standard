<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface AddressInterface extends \Stringable
{
	public function getId(): int;

	public function getName(): string;

	public function getPersonName(): string;

	public function getFirstName(): string;

	public function getLastName(): string;

	public function getCompanyName(): ?string;

	public function getCin(): ?string;

	public function getTin(): ?string;

	public function getStreet(): string;

	public function getCity(): string;

	public function getZip(): string;

	public function getCountry(): CountryInterface;

	public function getCoordinates(): ?CoordinatesInterface;
}
