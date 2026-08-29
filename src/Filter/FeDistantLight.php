<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeDistantLight extends Element
{
    public function __construct() { parent::__construct('feDistantLight'); }
    public function Azimuth(string|int|float $value): static { return $this->attr('azimuth', $value); }
    public function Elevation(string|int|float $value): static { return $this->attr('elevation', $value); }
}
