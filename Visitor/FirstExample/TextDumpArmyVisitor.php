<?php
namespace Visitor\FirstExample;

class TextDumpArmyVisitor extends ArmyVisitor
{
    private $text = '';

    public function visit(Unit $node)
    {
        $result = "";
        $pad = 4 * $node->getDepth();
        $result .= sprintf("%{$pad}s", "");
        $result .= get_class($node) . " : ";
        $result .= "bombard : " . $node->bombardStrength() . "\n";
        $this->text .= $result;
    }

    public function getText()
    {
        return $this->text;
    }
}