<?php
declare(strict_types=1);
namespace Svg\Tests;
use PHPUnit\Framework\TestCase;
use Svg\Svg;
final class SecurityTest extends TestCase
{
    public function testAttributesAreEscaped(): void
    {
        $output = (new Svg())->rect()->attr('data-x', '" onload="alert(1)')->render();
        self::assertStringNotContainsString('" onload=', $output);
        self::assertStringContainsString('&quot;', $output);
    }
}
