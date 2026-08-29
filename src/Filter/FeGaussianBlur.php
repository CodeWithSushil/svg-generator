<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeGaussianBlur extends Element
{
    public function __construct() { parent::__construct('feGaussianBlur'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Stddeviation(string|int|float $value): static { return $this->attr('stdDeviation', $value); }
    public function Edgemode(string|int|float $value): static { return $this->attr('edgeMode', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
