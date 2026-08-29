<?php

declare(strict_types=1);

namespace Svg\Symbol;

use Svg\Element;

final class Symbol extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('symbol');
        if ($id !== null) $this->id($id);
    }
}
