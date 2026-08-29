<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeSpecularLighting extends Element
{
    public function __construct() { parent::__construct('feSpecularLighting'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Surfacescale(string|int|float $value): static { return $this->attr('surfaceScale', $value); }
    public function Specularconstant(string|int|float $value): static { return $this->attr('specularConstant', $value); }
    public function Specularexponent(string|int|float $value): static { return $this->attr('specularExponent', $value); }
    public function Kernelunitlength(string|int|float $value): static { return $this->attr('kernelUnitLength', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
