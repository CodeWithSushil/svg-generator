<?php

declare(strict_types=1);

namespace Svg\Concerns;

use Svg\Group;
use Svg\Image;
use Svg\Link;
use Svg\Shapes\Circle;
use Svg\Shapes\Ellipse;
use Svg\Shapes\Line;
use Svg\Shapes\Path;
use Svg\Shapes\Polygon;
use Svg\Shapes\Polyline;
use Svg\Shapes\Rect;
use Svg\Text\Text;
use Svg\UseElement;

trait CreatesElements
{
    public function group(): Group { $e = new Group(); $this->append($e); return $e; }
    public function rect(string|int|float $x=0,string|int|float $y=0,string|int|float $width=0,string|int|float $height=0): Rect { $e=new Rect($x,$y,$width,$height);$this->append($e);return $e; }
    public function circle(string|int|float $cx=0,string|int|float $cy=0,string|int|float $r=0): Circle { $e=new Circle($cx,$cy,$r);$this->append($e);return $e; }
    public function ellipse(string|int|float $cx=0,string|int|float $cy=0,string|int|float $rx=0,string|int|float $ry=0): Ellipse { $e=new Ellipse($cx,$cy,$rx,$ry);$this->append($e);return $e; }
    public function line(string|int|float $x1=0,string|int|float $y1=0,string|int|float $x2=0,string|int|float $y2=0): Line { $e=new Line($x1,$y1,$x2,$y2);$this->append($e);return $e; }
    public function path(string $d=''): Path { $e=new Path($d);$this->append($e);return $e; }
    public function polygon(array $points=[]): Polygon { $e=new Polygon(implode(' ', $points));$this->append($e);return $e; }
    public function polyline(array $points=[]): Polyline { $e=new Polyline(implode(' ', $points));$this->append($e);return $e; }
    public function text(string $content='',string|int|float $x=0,string|int|float $y=0): Text { $e=new Text($content,$x,$y);$this->append($e);return $e; }
    public function image(string $href,string|int|float $x=0,string|int|float $y=0,string|int|float $width=0,string|int|float $height=0): Image { $e=new Image($href,$x,$y,$width,$height);$this->append($e);return $e; }
    public function link(string $href): Link { $e=new Link($href);$this->append($e);return $e; }
    public function useElement(string $href): UseElement { $e=new UseElement($href);$this->append($e);return $e; }
}
