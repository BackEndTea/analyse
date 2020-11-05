<?php

declare(strict_types=1);

namespace YSPBeer\Four;

use DateTimeImmutable;

final class DomainBeer
{
    public DateTimeImmutable $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
    }
}
