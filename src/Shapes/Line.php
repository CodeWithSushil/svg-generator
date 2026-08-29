<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Line extends Element
{
    public function __construct(string|int|float $x1, string|int|float $y1, string|int|float $x2, string|int|float $y2)
    {
        parent::__construct('line');
        $this->attr('x1', $x1);
        $this->attr('y1', $y1);
        $this->attr('x2', $x2);
        $this->attr('y2', $y2);
    }

    
}
