<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\InvoiceInterface;
use Baraja\EcommerceStandard\DTO\OrderInterface;

interface InvoiceManagerInterface
{
	public function createInvoice(OrderInterface $order): InvoiceInterface;

	public function isInvoice(OrderInterface $order): bool;

	public function getInvoicePath(InvoiceInterface $invoice): string;

	public function getByOrder(OrderInterface $order): InvoiceInterface;
}
