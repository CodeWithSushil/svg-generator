<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Polyline extends Element
{
    public function __construct(string|int|float $points)
    {
        parent::__construct('polyline');
        $this->attr('points', $points);
    }

    
}
