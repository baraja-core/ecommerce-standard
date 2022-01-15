<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CartInterface
{
	public function getId(): int;

	public function getIdentifier(): string;

	public function isEmpty(): bool;

	public function isFlushed(): bool;

	public function getCustomer(): ?CustomerInterface;

	public function getDelivery(): ?DeliveryInterface;

	public function setDelivery(?DeliveryInterface $delivery): void;

	public function getPayment(): ?PaymentInterface;

	public function setPayment(?PaymentInterface $payment): void;

	public function getPrice(): float;

	public function getPriceWithoutVat(): float;

	public function getDeliveryBranchId(): ?int;

	public function setDeliveryBranchId(?int $deliveryBranchId): void;

	public function getDeliveryPrice(float $itemsPrice = 0): float;

	public function getItemsPrice(bool $withVat = true): float;

	public function getCurrency(): CurrencyInterface;

	public function setCurrency(CurrencyInterface $currency): void;

	/**
	 * @return array<int, CartItemInterface>
	 */
	public function getAllItems(): array;

	/**
	 * @return array<int, CartItemInterface>
	 */
	public function getItems(): array;
}
