<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Rect extends Element
{
    public function __construct(string|int|float $x, string|int|float $y, string|int|float $width, string|int|float $height)
    {
        parent::__construct('rect');
        $this->attr('x', $x);
        $this->attr('y', $y);
        $this->attr('width', $width);
        $this->attr('height', $height);
    }

    public function radius(string|int|float $value): static { return $this->attr('rx', $value)->attr('ry', $value); }
}
