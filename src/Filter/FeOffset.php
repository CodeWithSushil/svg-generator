<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeOffset extends Element
{
    public function __construct() { parent::__construct('feOffset'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Dx(string|int|float $value): static { return $this->attr('dx', $value); }
    public function Dy(string|int|float $value): static { return $this->attr('dy', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
