<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Collection;


use Baraja\EcommerceStandard\DTO\OrderInterface;

final class OrderCollection
{
	/**
	 * @param array<int, OrderInterface> $orders
	 */
	public function __construct(private array $orders)
	{
		$this->orders = array_values($orders);
	}


	/**
	 * Get collection of orders as simple list.
	 *
	 * @return array<int, OrderInterface>
	 */
	public function getOrders(): array
	{
		return $this->orders;
	}
}
