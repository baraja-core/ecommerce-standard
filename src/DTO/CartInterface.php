<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CartInterface
{
	public function getId(): int;

	public function isEmpty(): bool;

	public function getCustomer(): ?CustomerInterface;

	public function getDelivery(): ?DeliveryInterface;

	public function setDelivery(?DeliveryInterface $delivery): void;

	public function getPayment(): ?PaymentInterface;

	public function setPayment(?PaymentInterface $payment): void;

	public function getPrice(): float;

	public function getPriceWithoutVat(): float;

	public function getDeliveryBranchId(): ?int;

	/**
	 * @return array<int, CartItemInterface>
	 */
	public function getAllItems(): array;

	/**
	 * @return array<int, CartItemInterface>
	 */
	public function getItems(): array;
}
