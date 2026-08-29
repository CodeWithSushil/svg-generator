<?php
declare(strict_types=1);
namespace Svg;
final class Image extends Element
{
    public function __construct(string $href,string|int|float $x=0,string|int|float $y=0,string|int|float $width=0,string|int|float $height=0)
    {
        parent::__construct('image');
        $this->attr('href',$href)->attr('x',$x)->attr('y',$y)->attr('width',$width)->attr('height',$height);
    }
}
