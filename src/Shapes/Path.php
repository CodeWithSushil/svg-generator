<?php

declare(strict_types=1);

namespace Svg\Shapes;

use Svg\Element;

final class Path extends Element
{
    private string $d = '';

    public function __construct(string $d = '')
    {
        parent::__construct('path');
        $this->d = $d;
        $this->sync();
    }

    public function d(string $value): static
    {
        $this->d = $value;
        return $this->sync();
    }

    public function moveTo(string|int|float $x, string|int|float $y): static
    {
        $this->d .= ($this->d === '' ? '' : ' ') . "M {$x} {$y}";
        return $this->sync();
    }

    public function lineTo(string|int|float $x, string|int|float $y): static
    {
        $this->d .= ($this->d === '' ? '' : ' ') . "L {$x} {$y}";
        return $this->sync();
    }

    public function horizontalTo(string|int|float $x): static
    {
        $this->d .= ($this->d === '' ? '' : ' ') . "H {$x}";
        return $this->sync();
    }

    public function verticalTo(string|int|float $y): static
    {
        $this->d .= ($this->d === '' ? '' : ' ') . "V {$y}";
        return $this->sync();
    }

    public function close(): static
    {
        $this->d .= ($this->d === '' ? '' : ' ') . 'Z';
        return $this->sync();
    }

    private function sync(): static
    {
        return $this->attr('d', $this->d);
    }
}
