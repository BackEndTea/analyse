<?php

declare(strict_types=1);

namespace YSPBeer\One;

/**
 * Pas alleen de annotations aan
 */
class Beer
{
    public const TASTE_GREAT = 1;
    public const TASTE_OKAY = 0;
    public const TASTE_BAD = -1;

    public int $taste;

    /**
     * @param int $taste Must be one of the TASTE_* constants
     */
    public function __construct(int $taste)
    {
        $this->taste = $taste;
    }
}
