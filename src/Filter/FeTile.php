<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeTile extends Element
{
    public function __construct() { parent::__construct('feTile'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
