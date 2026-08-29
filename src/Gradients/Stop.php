<?php
declare(strict_types=1);
namespace Svg\Gradients;
use Svg\Element;
final class Stop extends Element
{
    public function __construct(string|int|float $offset, string $color, string|int|float|null $opacity = null)
    {
        parent::__construct('stop');
        $this->attr('offset', $offset)->attr('stop-color', $color);
        if ($opacity !== null) $this->attr('stop-opacity', $opacity);
    }
}
