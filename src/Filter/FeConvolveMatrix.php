<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeConvolveMatrix extends Element
{
    public function __construct() { parent::__construct('feConvolveMatrix'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Order(string|int|float $value): static { return $this->attr('order', $value); }
    public function Kernelmatrix(string|int|float $value): static { return $this->attr('kernelMatrix', $value); }
    public function Divisor(string|int|float $value): static { return $this->attr('divisor', $value); }
    public function Bias(string|int|float $value): static { return $this->attr('bias', $value); }
    public function Targetx(string|int|float $value): static { return $this->attr('targetX', $value); }
    public function Targety(string|int|float $value): static { return $this->attr('targetY', $value); }
    public function Edgemode(string|int|float $value): static { return $this->attr('edgeMode', $value); }
    public function Kernelunitlength(string|int|float $value): static { return $this->attr('kernelUnitLength', $value); }
    public function Preservealpha(string|int|float $value): static { return $this->attr('preserveAlpha', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
