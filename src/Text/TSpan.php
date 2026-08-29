<?php

declare(strict_types=1);

namespace Svg\Text;

use Svg\Element;

final class TSpan extends Element
{
    public function __construct(string $content = '')
    {
        parent::__construct('tspan');
        $this->textContent($content);
    }
}
