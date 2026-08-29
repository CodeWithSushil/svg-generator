<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeComposite extends Element
{
    public function __construct() { parent::__construct('feComposite'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function In2(string|int|float $value): static { return $this->attr('in2', $value); }
    public function Operator(string|int|float $value): static { return $this->attr('operator', $value); }
    public function K1(string|int|float $value): static { return $this->attr('k1', $value); }
    public function K2(string|int|float $value): static { return $this->attr('k2', $value); }
    public function K3(string|int|float $value): static { return $this->attr('k3', $value); }
    public function K4(string|int|float $value): static { return $this->attr('k4', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
