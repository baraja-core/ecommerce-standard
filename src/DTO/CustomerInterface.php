<?php

declare(strict_types=1);

namespace Baraja\EcommerceStandard\DTO;


interface CustomerInterface
{
	/**
	 * Maximal supported value is 2147483647 for 32-bit system and 9223372036854775807 for 6-bit system.
	 *
	 * @return int<1, max>
	 */
	public function getId(): int;

	public function getName(): string;

	public function getFirstName(): string;

	public function getLastName(): string;

	/**
	 * @return non-empty-string|null
	 */
	public function getEmail(): ?string;

	/**
	 * Return a phone number in normalized format (full form with country/region).
	 *
	 * @return non-empty-string|null
	 * @see \Baraja\PhoneNumber\PhoneNumberFormatter::fix()
	 */
	public function getPhone(): ?string;

	/**
	 * Returns at least one functional and unique contact per user.
	 * The implementation prefers phone over email address.
	 *
	 * @throws \LogicException if contact does not exist
	 * @return non-empty-string
	 */
	public function getEmailOrPhone(): string;

	public function passwordVerify(string $password): bool;

	public function isNewsletter(): bool;

	public function isCompany(): bool;

	public function isPremium(): bool;

	public function isBan(): bool;

	public function getLocale(): ?string;

	public function getDefaultOrderSale(): float;
}
