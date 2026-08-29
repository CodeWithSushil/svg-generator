<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeColorMatrix extends Element
{
    public function __construct() { parent::__construct('feColorMatrix'); }
    public function In(string|int|float $value): static { return $this->attr('in', $value); }
    public function Type(string|int|float $value): static { return $this->attr('type', $value); }
    public function Values(string|int|float $value): static { return $this->attr('values', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
