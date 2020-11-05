<?php

declare(strict_types=1);

namespace YSPBeer\Three;

use YSPBeer\One\Beer;

/**
 * Voeg annotations toe aan `assertIsBeer`
 *
 * Moeilijker: voeg annotations toe aan `isInstanceOf`
 */
final class AssertBeer
{
    /**
     * @param mixed $beer
     */
    public static function assertIsBeer($beer): void
    {
        self::isInstanceOf($beer, Beer::class);
    }

    /**
     * @param mixed $beer
     */
    private static function isInstanceOf($beer, string $class): void
    {
        if(! $beer instanceof  $class) {
            throw new \InvalidArgumentException('Only accepting beer.');
        }
    }

}
