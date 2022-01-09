<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CoordinatesInterface
{
	public function getLatitude(): float;

	public function getLongitude(): float;
}
