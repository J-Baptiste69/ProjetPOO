<?php

class Archer extends Character
{
    public function turn($target)
    {
        if ($this->magicPoints <= 0) {
            return ;
        } else {
            return $this->tirerArrow($target);
        }
    }

    public function tirerArrow($target)
    {
        $this->setMagicPoints(1);
        $arrowCost = 1;
        $damage = $arrowCost * 10;
        $target->setHealthPoints($damage);
        $target->isAlive();
        $status = "$this->name envoie une flèche sur $target->name qui possède plus que $target->healthPoints points de vie ! Il reste $this->magicPoints points de magie à $this->name !";
        return $status;
    }

    public function setMagicPoints($loss)
    {
        $this->magicPoints -= $loss;
    }
}