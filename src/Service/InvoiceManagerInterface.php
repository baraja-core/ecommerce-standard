<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\InvoiceInterface;
use Baraja\EcommerceStandard\DTO\OrderInterface;
use Baraja\Shop\Invoice\Entity\Invoice;

interface InvoiceManagerInterface
{
	public function createInvoice(OrderInterface $order): InvoiceInterface;

	public function isInvoice(OrderInterface $order): bool;

	public function getInvoicePath(Invoice $invoice): string;

	public function getByOrder(OrderInterface $order): Invoice;
}
