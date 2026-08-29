<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeMergeNode extends Element
{
    public function __construct(string $input) { parent::__construct('feMergeNode'); $this->attr('in', $input); }
}
