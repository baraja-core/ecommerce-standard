<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface OrderStatusInterface extends \Stringable
{
	public function getId(): int;

	public function getCode(): string;

	public function getName(): string;

	public function getInternalName(): string;

	public function getLabel(): string;

	public function getPublicLabel(): string;

	public function getSystemHandle(): ?string;

	public function getWorkflowPosition(): int;

	public function getColor(): string;
}
