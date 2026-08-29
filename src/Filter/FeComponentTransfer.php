<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeComponentTransfer extends Element
{
    public function __construct() { parent::__construct('feComponentTransfer'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
