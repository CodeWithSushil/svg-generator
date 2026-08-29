<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeFlood extends Element
{
    public function __construct() { parent::__construct('feFlood'); }
    public function FloodColor(string|int|float $value): static { return $this->attr('flood-color', $value); }
    public function FloodOpacity(string|int|float $value): static { return $this->attr('flood-opacity', $value); }
    public function Result(string|int|float $value): static { return $this->attr('result', $value); }
}
