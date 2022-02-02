<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface InvoiceInterface
{
	public const
		TYPE_INVOICE = 'invoice',
		TYPE_PAYMENT_REQUEST = 'payment-request',
		TYPE_PROFORMA = 'proforma',
		TYPE_ORDER = 'order';

	public function getId(): int;

	public function getDownloadLink(): string;

	public function getLabel(): string;

	public function getOrder(): OrderInterface;

	public function getNumber(): string;

	public function getPrice(): PriceInterface;

	public function setPrice(PriceInterface $price): void;

	public function isPaid(): bool;

	public function setPaid(bool $paid): void;

	public function getPath(): ?string;

	public function setPath(?string $path): void;

	public function getType(): string;

	public function setType(string $type): void;

	public function getInsertedDate(): \DateTimeInterface;
}
