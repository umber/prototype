<?php

declare(strict_types=1);

namespace Umber\Prototype\Column\Date;

use Umber\Prototype\Hint\DateAwareHintInterface;

use DateTimeInterface;

/**
 * Object should be aware of the date it was updated at.
 */
interface UpdatedAtAwareInterface extends DateAwareHintInterface
{
    /**
     * Return the date updated at.
     */
    public function getUpdatedAt(): DateTimeInterface;

    /**
     * Set the date updated at.
     */
    public function setUpdatedAt(DateTimeInterface $updated): void;
}
