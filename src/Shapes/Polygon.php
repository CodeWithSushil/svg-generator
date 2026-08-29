<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Polygon extends Element
{
    public function __construct(string|int|float $points)
    {
        parent::__construct('polygon');
        $this->attr('points', $points);
    }

    
}
