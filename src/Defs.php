<?php

declare(strict_types=1);

namespace Svg;

use Svg\Clip\ClipPath;
use Svg\Filter\Filter;
use Svg\Gradients\LinearGradient;
use Svg\Gradients\RadialGradient;
use Svg\Marker\Marker;
use Svg\Mask\Mask;
use Svg\Paint\Pattern;
use Svg\Symbol\Symbol;

final class Defs extends Element
{
    public function __construct() { parent::__construct('defs'); }

    public function linearGradient(?string $id = null): LinearGradient
    {
        $e = new LinearGradient($id); $this->append($e); return $e;
    }

    public function radialGradient(?string $id = null): RadialGradient
    {
        $e = new RadialGradient($id); $this->append($e); return $e;
    }

    public function pattern(?string $id = null): Pattern
    {
        $e = new Pattern($id); $this->append($e); return $e;
    }

    public function clipPath(?string $id = null): ClipPath
    {
        $e = new ClipPath($id); $this->append($e); return $e;
    }

    public function mask(?string $id = null): Mask
    {
        $e = new Mask($id); $this->append($e); return $e;
    }

    public function marker(?string $id = null): Marker
    {
        $e = new Marker($id); $this->append($e); return $e;
    }

    public function symbol(?string $id = null): Symbol
    {
        $e = new Symbol($id); $this->append($e); return $e;
    }

    public function filter(?string $id = null): Filter
    {
        $e = new Filter($id); $this->append($e); return $e;
    }
}
