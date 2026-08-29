<?php

declare(strict_types=1);

namespace Svg\Marker;

use Svg\Element;

final class Marker extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('marker');
        if ($id !== null) $this->id($id);
    }
}
