<?php
declare(strict_types=1);
namespace Svg\Gradients;
final class LinearGradient extends Gradient
{
    public function __construct(?string $id = null)
    {
        parent::__construct('linearGradient');
        if ($id !== null) $this->id($id);
    }
}
