<?php

declare(strict_types=1);

namespace Svg\Clip;

use Svg\Element;

final class ClipPath extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('clipPath');
        if ($id !== null) $this->id($id);
    }
}
