<?php
declare(strict_types=1);
namespace Svg\Animation;
use Svg\Element;
final class AnimateTransform extends Element
{
    public function __construct() { parent::__construct('animateTransform'); }
    public function attributeName(string $value): static { return $this->attr('attributeName',$value); }
    public function from(string $value): static { return $this->attr('from',$value); }
    public function to(string $value): static { return $this->attr('to',$value); }
    public function dur(string $value): static { return $this->attr('dur',$value); }
    public function repeatCount(string|int|float $value): static { return $this->attr('repeatCount',$value); }
}
