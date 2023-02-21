<?php
// DEFINISCI CLASSE ASTRATTA:
abstract class Anterior{
    public abstract function attack();
}

abstract class Posterior{
    public abstract function defense();
}

class LanciaMissili extends Anterior{
    public function attack(){
        echo "Lancia un missile";
    }
}

class Gatling extends Anterior{
    public function attack(){
        echo "Un gatling potentissimo";
    }
}

class Scudo extends Posterior{
    public function defense(){
        echo "Usa lo scudo";
    }
}

class Banana extends Posterior{
    public function defense(){
        echo "Awand a cuss";
    }
}

class Batmobile{
    public $BatAttacco;
    public $BatDifesa;
    // DEPENDECY INJECTIONS 
    public function __construct(Anterior $attacco, Posterior $difesa){
        // (TYPE HINTING?)
        $this->BatAttacco = $attacco;
        $this->BatDifesa = $difesa;
    }
    public function attackEnemy(){
        $this->BatAttacco->attack();
    }

    public function defenseEnemy(){
        $this->BatDifesa->defense();
    }
}

$batmobile = new Batmobile(new Gatling, new Scudo);

$batmobile->attackEnemy();
$batmobile->defenseEnemy();

    

?>