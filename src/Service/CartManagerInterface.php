<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\CartInterface;
use Baraja\EcommerceStandard\DTO\CartItemInterface;
use Baraja\EcommerceStandard\DTO\CustomerInterface;
use Baraja\EcommerceStandard\DTO\PriceInterface;
use Baraja\EcommerceStandard\DTO\ProductInterface;
use Baraja\EcommerceStandard\DTO\ProductVariantInterface;

interface CartManagerInterface
{
	public function getCart(bool $flush = true): CartInterface;

	public function getCartFlushed(): CartInterface;

	public function isCartFlushed(): bool;

	public function buyProduct(
		ProductInterface $product,
		?ProductVariantInterface $variant,
		int $count = 1,
	): CartItemInterface;

	public function getItemsCount(): int;

	public function isFreeDelivery(CartInterface $cart): bool;

	public function getFreeDeliveryMinimalPrice(
		?CartInterface $cart = null,
		?CustomerInterface $customer = null,
	): PriceInterface;

	public function removeCart(CartInterface $cart): void;
}
