

<?php

require __DIR__.'/../vendor/autoload.php';

use Svg\Svg;

$svg = new Svg(500, 800);

$svg->text('SVG', 400, 380)
    ->fontSize(32)
    ->fontWeight(700)
    ->textAnchor('middle')
    ->fill('#FFF');

echo $svg->render(true);
