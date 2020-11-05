<?php

declare(strict_types=1);

namespace YSPBeer;

use JsonSerializable;
use YSPBeer\One\Beer;

/**
 * Haal de psalm suprress weg en fix de error.
 */
final class BeerList implements JsonSerializable
{
    /**
     * @psalm-var list<Beer>
     */
    private array $beers;

    /**
     * @psalm-param list<Beer> $beers
     */
    public function __construct(array $beers)
    {
        $this->beers = $beers;
    }

    public function addBeer(): void
    {
        /** @psalm-suppress  PropertyTypeCoercion */
        $this->beers[count($this->beers)] = new Beer(Beer::TASTE_GREAT);
    }

    /**
     * @psalm-return list<Beer>
     */
    public function jsonSerialize(): array
    {
        return $this->beers;
    }
}
