## SVG Generator
![PHP](https://img.shields.io/badge/PHP-8.4%2B-656BB4?style=for-the-badge&logo=php")
![Supabase](https://img.shields.io/badge/SVG-Generator-3ECF8E?style=for-the-badge&logo=svg)
![Latest Version](https://img.shields.io/packagist/v/sushilk/svg.svg?style=for-the-badge&logo=packagist)
![Total Downloads](https://img.shields.io/packagist/dt/sushilk/svg.svg?style=for-the-badge&logo=composer)
[![License](https://img.shields.io/packagist/l/sushilk/svg.svg?style=for-the-badge&logo=github)](LICENSE)

A modern, secure and fluent PHP 8.4+ library for generating SVG documents.

---

### Installation 

```bash
composer require sushilk/svg
```

---

## Quick start

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Svg\Svg;

$svg = new Svg(800, 500);

$svg->viewBox(0, 0, 800, 500)
    ->title('Lilac SVG')
    ->description('Generated with lilac/svg');

$gradient = $svg->defs()
    ->linearGradient('background')
    ->from(0, 0)
    ->to(1, 1);

$gradient
    ->stop(0, '#2563eb')
    ->stop(1, '#7c3aed');

$svg->rect(0, 0, 800, 500)
    ->fillUrl('background')
    ->radius(30);

$svg->circle(400, 220, 100)
    ->fill('#fff');

$svg->text('Lilac SVG', 400, 380)
    ->fontSize(52)
    ->fontWeight(700)
    ->textAnchor('middle')
    ->fill('#fff');

echo $svg->render(true);
```

## Features

- Fluent SVG API
- Rectangles, circles, ellipses, lines, paths, polygons and polylines
- Text and tspans
- Groups and transforms
- Gradients, patterns, markers, masks and clipping paths
- SVG filters
- SVG animation elements
- XML escaping by default
- Accessibility metadata
- PHP 8.4+
- PSR-4 autoloading
- PHPUnit and PHPStan support

## License

MIT. See [LICENSE](LICENSE).

---
