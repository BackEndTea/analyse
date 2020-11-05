<?php

use YSPBeer\One\Beer;

// Error
new Beer(3);

// ok
$s = new Beer(
    random_int(0,1)
        ? Beer::TASTE_OKAY
        : Beer::TASTE_BAD
);

if($s->taste === Beer::TASTE_BAD) {
    throw new LogicException('Beer should not taste bad');
}
// Error
$s->taste = 3;
