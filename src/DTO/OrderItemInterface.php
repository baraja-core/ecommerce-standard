<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface OrderItemInterface
{
	public const
		TYPE_PRODUCT = 'product',
		TYPE_DISCOUNT = 'discount',
		TYPE_SHIPPING = 'shipping',
		TYPE_BILLING = 'billing',
		TYPE_VIRTUAL = 'virtual';

	public function getId(): int;

	/**
	 * One of the supported item types in the order.
	 */
	public function getType(): string;

	public function getCode(): string;

	/**
	 * Is this order item a real product from the e-shop?
	 * Real products are standard items that may have variations and stock capacity.
	 * If the method returns FALSE, it is a virtual product that is only available in this order.
	 * For example, a manually inserted consultation that cannot be purchased on the e-shop.
	 */
	public function isProductBased(): bool;

	public function getOrder(): OrderInterface;

	public function getProduct(): ProductInterface;

	public function getVariant(): ?ProductVariantInterface;

	public function getManufacturer(): ?ManufacturerInterface;

	public function getLabel(): string;

	public function getFinalPrice(): float;

	public function getVat(): float;

	public function getAmount(): float|int;

	public function getUnit(): string;

	public function getWeight(): ?int;
}