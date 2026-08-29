<?php

declare(strict_types=1);

namespace Svg;

final class Renderer
{
    public function render(Svg $svg, bool $pretty = false): string
    {
        return $svg->renderDocument($pretty);
    }
}
