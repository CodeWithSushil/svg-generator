<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FePointLight extends Element
{
    public function __construct() { parent::__construct('fePointLight'); }
    public function X(string|int|float $value): static { return $this->attr('x', $value); }
    public function Y(string|int|float $value): static { return $this->attr('y', $value); }
    public function Z(string|int|float $value): static { return $this->attr('z', $value); }
}
