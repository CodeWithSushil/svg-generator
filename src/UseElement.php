<?php
declare(strict_types=1);
namespace Svg;
final class UseElement extends Element
{
    public function __construct(string $href) { parent::__construct('use'); $this->attr('href',$href); }
    public function x(string|int|float $value): static { return $this->attr('x',$value); }
    public function y(string|int|float $value): static { return $this->attr('y',$value); }
    public function width(string|int|float $value): static { return $this->attr('width',$value); }
    public function height(string|int|float $value): static { return $this->attr('height',$value); }
}
