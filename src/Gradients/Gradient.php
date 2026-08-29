<?php

declare(strict_types=1);

namespace Svg\Gradients;

use Svg\Element;

abstract class Gradient extends Element
{
    public function stop(string|int|float $offset, string $color, string|int|float|null $opacity = null): static
    {
        $stop = new Stop($offset, $color, $opacity);
        $this->append($stop);
        return $this;
    }

    public function from(string|int|float $x1, string|int|float $y1): static
    {
        return $this->attr('x1', $x1)->attr('y1', $y1);
    }

    public function to(string|int|float $x2, string|int|float $y2): static
    {
        return $this->attr('x2', $x2)->attr('y2', $y2);
    }
}
