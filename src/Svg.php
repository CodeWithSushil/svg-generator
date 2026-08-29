<?php

declare(strict_types=1);

namespace Svg;

use Svg\Concerns\CreatesElements;

final class Svg extends Element
{
    use CreatesElements;

    private ?Defs $definitions = null;
    private ?string $documentTitle = null;
    private ?string $documentDescription = null;

    public function __construct(
        int|float|string $width = 300,
        int|float|string $height = 150
    ) {
        parent::__construct('svg');

        $this->attr('xmlns', 'http://www.w3.org/2000/svg')
            ->attr('width', $width)
            ->attr('height', $height)
            ->attr('version', '1.1');
    }

    public function viewBox(int|float|string $x, int|float|string $y, int|float|string $width, int|float|string $height): static
    {
        return $this->attr('viewBox', "{$x} {$y} {$width} {$height}");
    }

    public function version(string $value): static { return $this->attr('version', $value); }
    public function xmlns(string $value): static { return $this->attr('xmlns', $value); }

    public function defs(): Defs
    {
        return $this->definitions ??= new Defs();
    }

    public function title(string $value): static
    {
        $this->documentTitle = $value;
        return $this;
    }

    public function description(string $value): static
    {
        $this->documentDescription = $value;
        return $this;
    }

    public function render(bool $pretty = false): string
    {
        return (new Renderer())->render($this, $pretty);
    }

    public function renderDocument(bool $pretty = false): string
    {
        $indent = $pretty ? "    " : '';
        $newline = $pretty ? "\n" : '';

        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= ' ' . $name . '="' . htmlspecialchars((string) $value, ENT_XML1 | ENT_QUOTES, 'UTF-8') . '"';
        }

        $out = '<?xml version="1.0" encoding="UTF-8"?>' . $newline;
        $out .= '<svg' . $attributes . '>' . $newline;

        if ($this->documentTitle !== null) {
            $out .= $indent . '<title>' . htmlspecialchars($this->documentTitle, ENT_XML1 | ENT_QUOTES, 'UTF-8') . '</title>' . $newline;
        }

        if ($this->documentDescription !== null) {
            $out .= $indent . '<desc>' . htmlspecialchars($this->documentDescription, ENT_XML1 | ENT_QUOTES, 'UTF-8') . '</desc>' . $newline;
        }

        if ($this->definitions !== null) {
            $out .= $this->definitions->render(1, $pretty);
        }

        foreach ($this->children as $child) {
            $out .= is_string($child)
                ? htmlspecialchars($child, ENT_XML1 | ENT_QUOTES, 'UTF-8')
                : $child->render(1, $pretty);
        }

        $out .= '</svg>' . $newline;
        return $out;
    }
}
