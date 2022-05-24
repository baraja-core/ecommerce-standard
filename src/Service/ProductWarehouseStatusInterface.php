<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\ProductInterface;
use Baraja\EcommerceStandard\DTO\ProductVariantInterface;

interface ProductWarehouseStatusInterface
{
	public function isAvailable(ProductInterface|ProductVariantInterface $product): bool;

	public function getAvailabilityLabel(ProductInterface|ProductVariantInterface $product): string;
}
