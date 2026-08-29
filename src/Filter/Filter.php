<?php
declare(strict_types=1);
namespace Svg\Filter;
use Svg\Element;
final class Filter extends Element
{
    public function __construct(?string $id = null)
    {
        parent::__construct('filter');
        if ($id !== null) $this->id($id);
    }
    public function gaussianBlur(string|int|float $stdDeviation = 0): FeGaussianBlur { $e=new FeGaussianBlur();$e->stdDeviation($stdDeviation);$this->append($e);return $e; }
    public function dropShadow(): FeDropShadow { $e=new FeDropShadow();$this->append($e);return $e; }
    public function offset(): FeOffset { $e=new FeOffset();$this->append($e);return $e; }
    public function flood(): FeFlood { $e=new FeFlood();$this->append($e);return $e; }
    public function colorMatrix(): FeColorMatrix { $e=new FeColorMatrix();$this->append($e);return $e; }
    public function blend(): FeBlend { $e=new FeBlend();$this->append($e);return $e; }
    public function composite(): FeComposite { $e=new FeComposite();$this->append($e);return $e; }
    public function morphology(): FeMorphology { $e=new FeMorphology();$this->append($e);return $e; }
    public function displacementMap(): FeDisplacementMap { $e=new FeDisplacementMap();$this->append($e);return $e; }
    public function turbulence(): FeTurbulence { $e=new FeTurbulence();$this->append($e);return $e; }
    public function merge(): FeMerge { $e=new FeMerge();$this->append($e);return $e; }
}
