<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeSpotLight extends Element
{
    public function __construct() { parent::__construct('feSpotLight'); }
    public function X(string|int|float $value): static { return $this->attr('x', $value); }
    public function Y(string|int|float $value): static { return $this->attr('y', $value); }
    public function Z(string|int|float $value): static { return $this->attr('z', $value); }
    public function Pointsatx(string|int|float $value): static { return $this->attr('pointsAtX', $value); }
    public function Pointsaty(string|int|float $value): static { return $this->attr('pointsAtY', $value); }
    public function Pointsatz(string|int|float $value): static { return $this->attr('pointsAtZ', $value); }
    public function Specularexponent(string|int|float $value): static { return $this->attr('specularExponent', $value); }
    public function Limitingconeangle(string|int|float $value): static { return $this->attr('limitingConeAngle', $value); }
}
