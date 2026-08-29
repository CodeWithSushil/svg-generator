<?php

declare(strict_types=1);

namespace Svg;

use Svg\Concerns\CreatesElements;

final class Group extends Element
{
    use CreatesElements;

    public function __construct() { parent::__construct('g'); }
}
