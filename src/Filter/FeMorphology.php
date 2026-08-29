<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeMorphology extends Element
{
    public function __construct() { parent::__construct('feMorphology'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Operator(string|int|float $value): static { return $this->attr('operator', $value); }
    public function Radius(string|int|float $value): static { return $this->attr('radius', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
