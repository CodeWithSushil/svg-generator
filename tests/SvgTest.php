<?php
declare(strict_types=1);
namespace Svg\Tests;
use PHPUnit\Framework\TestCase;
use Svg\Svg;
final class SvgTest extends TestCase
{
    public function testCreatesSvg(): void
    {
        $svg = new Svg(500, 300);
        $output = $svg->render();
        self::assertStringContainsString('<svg', $output);
        self::assertStringContainsString('width="500"', $output);
        self::assertStringContainsString('height="300"', $output);
    }

    public function testEscapesText(): void
    {
        $output = (new Svg())->text('<script>alert(1)</script>', 0, 20)->render();
        self::assertStringNotContainsString('<script>', $output);
        self::assertStringContainsString('&lt;script&gt;', $output);
    }

    public function testGradientAndFilter(): void
    {
        $svg = new Svg();
        $svg->defs()->linearGradient('g')->stop(0, '#000')->stop(1, '#fff');
        $svg->defs()->filter('shadow')->dropShadow()->dx(0)->dy(4)->stdDeviation(5);
        $output = $svg->rect(0,0,100,100)->fillUrl('g')->filterUrl('shadow')->render();
        self::assertStringContainsString('linearGradient', $output);
        self::assertStringContainsString('feDropShadow', $output);
        self::assertStringContainsString('filter="url(#shadow)"', $output);
    }
}
