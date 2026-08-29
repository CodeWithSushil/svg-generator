<?php

require __DIR__ . '/../vendor/autoload.php';

use Svg\Svg;

$svg = new Svg(800, 500);
$svg->viewBox(0, 0, 800, 500);
$svg->text('Lilac SVG - text', 400, 250)->fontSize(40)->textAnchor('middle');
echo $svg->render(true);
