<?php

declare(strict_types=1);

namespace Svg\Text;

use Svg\Element;

final class TextPath extends Element
{
    public function __construct(string $href = '', string $content = '')
    {
        parent::__construct('textPath');
        $this->attr('href', $href)->textContent($content);
    }

    public function startOffset(string|int|float $value): static
    {
        return $this->attr('startOffset', $value);
    }
}
