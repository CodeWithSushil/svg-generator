<?php

declare(strict_types=1);

namespace Svg;

class Element
{
    protected array $attributes = [];
    protected array $children = [];
    protected ?string $textContent = null;

    public function __construct(protected string $tag)
    {
    }

    public function attr(string $name, string|int|float|bool|null $value): static
    {
        if ($value === null || $value === false) {
            unset($this->attributes[$name]);
            return $this;
        }

        $this->attributes[$name] = $value === true ? 'true' : (string) $value;
        return $this;
    }

    public function append(Element|string $child): static
    {
        $this->children[] = $child;
        return $this;
    }

    public function textContent(string $value): static
    {
        $this->textContent = $value;
        return $this;
    }

    public function id(string $value): static { return $this->attr('id', $value); }
    public function class(string $value): static { return $this->attr('class', $value); }
    public function style(string $value): static { return $this->attr('style', $value); }
    public function fill(string $value): static { return $this->attr('fill', $value); }
    public function fillUrl(string $id): static { return $this->fill("url(#{$id})"); }
    public function fillOpacity(string|int|float $value): static { return $this->attr('fill-opacity', $value); }
    public function stroke(string $value): static { return $this->attr('stroke', $value); }
    public function strokeUrl(string $id): static { return $this->stroke("url(#{$id})"); }
    public function strokeWidth(string|int|float $value): static { return $this->attr('stroke-width', $value); }
    public function strokeOpacity(string|int|float $value): static { return $this->attr('stroke-opacity', $value); }
    public function strokeLinecap(string $value): static { return $this->attr('stroke-linecap', $value); }
    public function strokeLinejoin(string $value): static { return $this->attr('stroke-linejoin', $value); }
    public function strokeDasharray(string $value): static { return $this->attr('stroke-dasharray', $value); }
    public function strokeDashoffset(string|int|float $value): static { return $this->attr('stroke-dashoffset', $value); }
    public function opacity(string|int|float $value): static { return $this->attr('opacity', $value); }
    public function visibility(string $value): static { return $this->attr('visibility', $value); }
    public function display(string $value): static { return $this->attr('display', $value); }
    public function color(string $value): static { return $this->attr('color', $value); }

    public function fontFamily(string $value): static { return $this->attr('font-family', $value); }
    public function fontSize(string|int|float $value): static { return $this->attr('font-size', $value); }
    public function fontWeight(string|int $value): static { return $this->attr('font-weight', $value); }
    public function fontStyle(string $value): static { return $this->attr('font-style', $value); }
    public function fontVariant(string $value): static { return $this->attr('font-variant', $value); }
    public function letterSpacing(string|int|float $value): static { return $this->attr('letter-spacing', $value); }
    public function wordSpacing(string|int|float $value): static { return $this->attr('word-spacing', $value); }
    public function textAnchor(string $value): static { return $this->attr('text-anchor', $value); }
    public function dominantBaseline(string $value): static { return $this->attr('dominant-baseline', $value); }

    public function translate(string|int|float $x, string|int|float $y = 0): static
    {
        return $this->transform("translate({$x} {$y})");
    }

    public function rotate(string|int|float $angle, string|int|float|null $cx = null, string|int|float|null $cy = null): static
    {
        $value = $cx === null || $cy === null ? "rotate({$angle})" : "rotate({$angle} {$cx} {$cy})";
        return $this->transform($value);
    }

    public function scale(string|int|float $x, string|int|float|null $y = null): static
    {
        return $this->transform($y === null ? "scale({$x})" : "scale({$x} {$y})");
    }

    public function skewX(string|int|float $value): static { return $this->transform("skewX({$value})"); }
    public function skewY(string|int|float $value): static { return $this->transform("skewY({$value})"); }

    public function transform(string $value): static
    {
        $current = $this->attributes['transform'] ?? '';
        $this->attributes['transform'] = trim($current . ' ' . $value);
        return $this;
    }

    public function filter(string $value): static { return $this->attr('filter', $value); }
    public function filterUrl(string $id): static { return $this->filter("url(#{$id})"); }
    public function clipPathUrl(string $id): static { return $this->attr('clip-path', "url(#{$id})"); }
    public function maskUrl(string $id): static { return $this->attr('mask', "url(#{$id})"); }

    public function data(string $name, string $value): static
    {
        return $this->attr("data-{$name}", $value);
    }

    public function aria(string $name, string $value): static
    {
        return $this->attr("aria-{$name}", $value);
    }

    public function render(int $level = 0, bool $pretty = false): string
    {
        $indent = $pretty ? str_repeat('    ', $level) : '';
        $newline = $pretty ? "\n" : '';

        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= ' ' . $name . '="' . htmlspecialchars((string) $value, ENT_XML1 | ENT_QUOTES, 'UTF-8') . '"';
        }

        $hasContent = $this->textContent !== null || $this->children !== [];

        if (!$hasContent) {
            return $indent . '<' . $this->tag . $attributes . '/>' . $newline;
        }

        $out = $indent . '<' . $this->tag . $attributes . '>';

        if ($this->textContent !== null) {
            $out .= htmlspecialchars($this->textContent, ENT_XML1 | ENT_QUOTES, 'UTF-8');
        }

        foreach ($this->children as $child) {
            $out .= is_string($child)
                ? htmlspecialchars($child, ENT_XML1 | ENT_QUOTES, 'UTF-8')
                : $child->render($level + 1, $pretty);
        }

        $out .= '</' . $this->tag . '>' . $newline;
        return $out;
    }
}
