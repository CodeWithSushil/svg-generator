

<?php

require __DIR__.'/../vendor/autoload.php';

use SVG\SVG;

$svg = SVG::generate()
    ->react(4, 4, 150, 150)
    ->fill('#00044F')
    ->get();
