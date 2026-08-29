<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Circle extends Element
{
    public function __construct(string|int|float $cx, string|int|float $cy, string|int|float $r)
    {
        parent::__construct('circle');
        $this->attr('cx', $cx);
        $this->attr('cy', $cy);
        $this->attr('r', $r);
    }

    
}
