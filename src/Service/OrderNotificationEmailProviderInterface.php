<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\Service;


use Baraja\EcommerceStandard\DTO\OrderInterface;

interface OrderNotificationEmailProviderInterface
{
	/**
	 * @param array<int, string> $attachments
	 */
	public function send(OrderInterface $order, string $subject, string $content, array $attachments = []): void;
}
