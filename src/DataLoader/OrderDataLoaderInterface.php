<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DataLoader;


use Baraja\EcommerceStandard\Collection\OrderCollection;

interface OrderDataLoaderInterface
{
	public const
		DEFAULT_LIMIT = 100,
		MAX_LIMIT = 5000,
		FIRST_PAGE = 1;

	public function getAll(
		int $page = self::FIRST_PAGE,
		int $limit = self::DEFAULT_LIMIT,
		?string $type = null,
	): OrderCollection;
}
