<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeDropShadow extends Element
{
    public function __construct() { parent::__construct('feDropShadow'); }
    public function Dx(string|int|float $value): static { return $this->attr('dx', $value); }
    public function Dy(string|int|float $value): static { return $this->attr('dy', $value); }
    public function Stddeviation(string|int|float $value): static { return $this->attr('stdDeviation', $value); }
    public function FloodColor(string|int|float $value): static { return $this->attr('flood-color', $value); }
    public function FloodOpacity(string|int|float $value): static { return $this->attr('flood-opacity', $value); }
}
