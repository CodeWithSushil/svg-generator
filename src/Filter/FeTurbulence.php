<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeTurbulence extends Element
{
    public function __construct() { parent::__construct('feTurbulence'); }
    public function Basefrequency(string|int|float $value): static { return $this->attr('baseFrequency', $value); }
    public function Numoctaves(string|int|float $value): static { return $this->attr('numOctaves', $value); }
    public function Seed(string|int|float $value): static { return $this->attr('seed', $value); }
    public function Type(string|int|float $value): static { return $this->attr('type', $value); }
    public function Stitchtiles(string|int|float $value): static { return $this->attr('stitchTiles', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
