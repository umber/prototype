<?php

declare(strict_types=1);

namespace Umber\Prototype\Column;

/**
 * Object should be aware of a public facing identity.
 */
interface PublicIdentityAwareInterface
{
    /**
     * Return the public identity.
     */
    public function getPublicId(): string;

    /**
     * Check the public identity is set.
     */
    public function hasPublicId(): bool;

    /**
     * Set the public identity.
     */
    public function setPublicId(string $id): void;
}
