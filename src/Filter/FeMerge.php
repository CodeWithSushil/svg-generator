<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class FeMerge extends Element
{
    public function __construct() { parent::__construct('feMerge'); }
    public function node(string $input): static { $this->append(new FeMergeNode($input)); return $this; }
}
