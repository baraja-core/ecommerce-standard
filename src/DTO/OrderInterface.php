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

	public function getStatus(): OrderStatusInterface;

	public function getLocale(): string;

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
	 * BasePrice - Sale
	 * Real final price for given customer or company with vat.
	 * The price will never be negative and is always reduced by a set discount.
	 */
	public function getPrice(): PriceInterface;

	/**
	 * The final price of all items in the order including all taxes.
	 * The customer must pay this amount in the selected currency for the order to be considered paid.
	 * The base price may be manually adjusted and may not be the sum of all items.
	 */
	public function getBasePrice(): PriceInterface;

	/**
	 * The absolute value of all taxes that need to be paid for this order.
	 * The amount is shown in the currency you have selected.
	 */
	public function getVatValue(): PriceInterface;

	public function getPriceWithoutVat(): PriceInterface;

	public function setBasePrice(PriceInterface $price): void;

	/**
	 * The absolute value of the basic discount for the entire order.
	 * The discount is usually set manually. The discount can never be negative.
	 * The maximum discount value is the price of the entire order.
	 */
	public function getSale(): PriceInterface;

	public function setSale(PriceInterface $sale): void;

	public function getDeliveryPrice(): PriceInterface;

	public function getPaymentPrice(): PriceInterface;

	public function getCurrency(): CurrencyInterface;

	public function setCurrency(CurrencyInterface $currency): void;

	/**
	 * Returns the ISO code of the selected order currency. All prices for all items are listed in this currency.
	 * The order currency should never change. The calculation of the currency rates was made at the time
	 * the specific order items were entered and does not change over time.
	 */
	public function getCurrencyCode(): string;

	public function getDeliveryAddress(): ?AddressInterface;

	public function getPaymentAddress(): ?AddressInterface;

	public function getDelivery(): ?DeliveryInterface;

	public function getPayment(): ?PaymentInterface;

	/**
	 * Shipment number in the system of the selected external carrier.
	 * More information is available according to the chosen delivery service.
	 */
	public function getPackageNumber(): ?string;

	public function getNotice(): ?string;

	/**
	 * The date and time the order was created or entered into the system.
	 * Order dates must be in the same order as the order numbers.
	 * If the order was imported into the system, this is the date it was entered into the database.
	 */
	public function getInsertedDate(): \DateTimeInterface;

	/**
	 * Date and time of the last change to the order settings.
	 * It is set to date('now') every time you edit values or add an item.
	 * The date is also changed when the order changes from current state to another.
	 */
	public function getUpdatedDate(): \DateTimeInterface;
}
