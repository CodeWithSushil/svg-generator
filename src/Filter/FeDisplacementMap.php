<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeDisplacementMap extends Element
{
    public function __construct() { parent::__construct('feDisplacementMap'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function In2(string|int|float $value): static { return $this->attr('in2', $value); }
    public function Scale(string|int|float $value): static { return $this->attr('scale', $value); }
    public function Xchannelselector(string|int|float $value): static { return $this->attr('xChannelSelector', $value); }
    public function Ychannelselector(string|int|float $value): static { return $this->attr('yChannelSelector', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
