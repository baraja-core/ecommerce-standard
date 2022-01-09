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

	public function getType(): string;

	public function getOrder(): OrderInterface;
}
