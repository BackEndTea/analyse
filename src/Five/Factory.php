<?php

declare(strict_types=1);

namespace YSPBeer\Five;

/**
 * Verwijder suppress annotations.
 *
 * Fix de errors zonder de code aan te passen.
 */
final class Factory
{
    private array $classes;

    /**
     * Factory constructor.
     * @psalm-param list<string> $classes
     */
    public function __construct(array $classes)
    {
        $this->classes = $classes;
    }

    /**
     * @psalm-suppress MixedAssignment
     * @psalm-suppress LessSpecificReturnStatement
     * @psalm-suppress MixedMethodCall
     * @psalm-suppress MoreSpecificReturnType
     */
    public function create(int $id): BeerInterface
    {
        $class = $this->classes[$id];

        $instance =  new $class();
        // All beer interfaces should also be Drinkable, so take a quick sip after creating it.
        $instance->drink();
        return $instance;
    }
}
