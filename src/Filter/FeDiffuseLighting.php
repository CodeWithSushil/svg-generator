<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeDiffuseLighting extends Element
{
    public function __construct() { parent::__construct('feDiffuseLighting'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Surfacescale(string|int|float $value): static { return $this->attr('surfaceScale', $value); }
    public function Diffuseconstant(string|int|float $value): static { return $this->attr('diffuseConstant', $value); }
    public function Kernelunitlength(string|int|float $value): static { return $this->attr('kernelUnitLength', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
