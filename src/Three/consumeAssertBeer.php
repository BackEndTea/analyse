<?php

declare(strict_types=1);

namespace YSPBeer\Three;

use YSPBeer\One\Beer;

/**
 * @param mixed $param
 * @return mixed
 */
function consume($param)//: Beer
{
    AssertBeer::assertIsBeer($param);
    return $param;
}
