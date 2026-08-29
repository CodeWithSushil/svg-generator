<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Ellipse extends Element
{
    public function __construct(string|int|float $cx, string|int|float $cy, string|int|float $rx, string|int|float $ry)
    {
        parent::__construct('ellipse');
        $this->attr('cx', $cx);
        $this->attr('cy', $cy);
        $this->attr('rx', $rx);
        $this->attr('ry', $ry);
    }

    
}
