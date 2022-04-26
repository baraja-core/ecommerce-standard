<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CartSaleInterface
{
	public function getId(): int;

	public function getCart(): CartInterface;

	public function getType(): string;

	/**
	 * @return numeric-string
	 */
	public function getValue(): string;

	public function getVoucher(): ?CartVoucherInterface;

	public function setVoucher(?CartVoucherInterface $voucher): void;
}
