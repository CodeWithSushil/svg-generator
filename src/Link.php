<?php
declare(strict_types=1);
namespace Svg;
use Svg\Concerns\CreatesElements;
final class Link extends Element
{
    use CreatesElements;
    public function __construct(string $href) { parent::__construct('a'); $this->attr('href',$href); }
}
