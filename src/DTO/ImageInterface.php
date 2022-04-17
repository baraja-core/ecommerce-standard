<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface ImageInterface extends \Stringable
{
	public function getId(): int;

	public function getRelativePath(): string;

	public function getSource(): string;

	public function getUrl(): string;

	/**
	 * @return array{source: string, title: string, url: string}
	 */
	public function toArray(): array;

	public function getProduct(): ProductInterface;

	public function getVariant(): ?ProductVariantInterface;

	public function getPosition(): int;

	public function getAltTitle(): string;

	public function getTag(): ?string;

	public function setTag(?string $tag): void;
}
