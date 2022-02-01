<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface OrderGatewayResponseInterface
{
	public function getRedirect(): ?string;

	public function setRedirect(?string $redirect): void;

	public function getErrorMessage(): ?string;

	public function setErrorMessage(?string $errorMessage): void;
}
