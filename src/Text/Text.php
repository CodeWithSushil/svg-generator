<?php

declare(strict_types=1);

namespace Svg\Text;

use Svg\Element;

final class Text extends Element
{
    public function __construct(string $content = '', string|int|float $x = 0, string|int|float $y = 0)
    {
        parent::__construct('text');
        $this->attr('x', $x)->attr('y', $y)->textContent($content);
    }
}
