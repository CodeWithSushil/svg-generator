<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeImage extends Element
{
    public function __construct() { parent::__construct('feImage'); }
    public function Href(string|int|float $value): static { return $this->attr('href', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
