<?php
declare(strict_types=1);
namespace Svg\Gradients;
final class RadialGradient extends Gradient
{
    public function __construct(?string $id = null)
    {
        parent::__construct('radialGradient');
        if ($id !== null) $this->id($id);
    }
}
