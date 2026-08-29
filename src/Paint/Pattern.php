<?php

declare(strict_types=1);

namespace Svg\Paint;

use Svg\Element;

final class Pattern extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('pattern');
        if ($id !== null) $this->id($id);
    }
}
