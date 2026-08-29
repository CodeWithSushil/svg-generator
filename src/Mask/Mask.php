<?php

declare(strict_types=1);

namespace Svg\Mask;

use Svg\Element;

final class Mask extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('mask');
        if ($id !== null) $this->id($id);
    }
}
