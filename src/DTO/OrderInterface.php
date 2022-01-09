<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface OrderInterface
{
	/**
	 * The internal database ID used in your system. This ID must always be unique!
	 * We use it to link systems by direct reference.
	 * If this field is the same as the customer-visible order number, enter it here a second time.
	 * Maximal supported value is 2147483647 for 32-bit system and 9223372036854775807 for 6-bit system.
	 *
	 * @return int<1, max>
	 */
	public function getId(): int;

	/**
	 * The order number as the customer sees it. The number must always be unique!
	 * The number must consist of characters of the English alphabet and may begin with zero.
	 * The number must be written using ASCII characters only.
	 *
	 * @return non-empty-string
	 */
	public function getNumber(): string;

	public function getInvoiceNumber(): ?string;

	/**
	 * A randomly generated, unique, 32 character long, secret order identifier.
	 * The ID is used to identify the order in an external system where
	 * it is not appropriate for other order identifiers to be derived.
	 * Example of use: URL generator for public detail URL with order or invoice details.
	 *
	 * @return non-empty-string
	 */
	public function getHash(): string;

	public function isPaid(): bool;

	public function setPaid(bool $paid): void;

	public function getCustomer(): ?CustomerInterface;

	/**
	 * @return array<int, OrderItemInterface>
	 */
	public function getItems(): array;

	public function addItem(OrderItemInterface $item): void;

	/**
	 * Real final price for given customer or company with vat.
	 */
	public function getPrice(): float;

	/**
	 * @return float
	 */
	public function getBasePrice(): float;

	public function getPriceWithoutVat(): float;

	public function setBasePrice(float $price): void;

	public function getSale(): float;

	public function setSale(float $sale): void;

	public function getCurrencyCode(): string;

	public function setCurrencyCode(string $currency): void;

	public function getVatRate(): float;

	public function getDeliveryAddress(): ?AddressInterface;

	public function getPaymentAddress(): ?AddressInterface;

	public function getPackageNumber(): ?string;

	public function getInsertedDate(): \DateTimeInterface;

	public function getUpdatedDate(): \DateTimeInterface;
}
