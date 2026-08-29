<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeBlend extends Element
{
    public function __construct() { parent::__construct('feBlend'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function In2(string|int|float $value): static { return $this->attr('in2', $value); }
    public function Mode(string|int|float $value): static { return $this->attr('mode', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
