<?php

declare(strict_types=1);

namespace Umber\Prototype\Column\Date;

use DateTimeInterface;

/**
 * Object becomes aware of its created date.
 *
 * @mixin CreatedAtAwareInterface
 */
trait CreatedAtAwareTrait
{
    /** @var DateTimeInterface */
    protected $createdAt;

    /**
     * {@inheritdoc}
     *
     * @see CreatedAtAwareInterface::getCreatedAt()
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     *
     * @see CreatedAtAwareInterface::setCreatedAt()
     */
    public function setCreatedAt(DateTimeInterface $created): void
    {
        $this->createdAt = $created;
    }
}
