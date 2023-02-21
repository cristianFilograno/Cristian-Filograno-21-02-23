<?php

abstract class Head{
    public abstract function Maschera();
}

abstract class UpperBody{
    public abstract function Muscle();
}

abstract class ArmDx{
    public abstract function Attacco();
}

abstract class ArmSx{
    public abstract function Difesa();
}

abstract class Lowerbody{
    public abstract function Movement();
}


// TESTA
class MascheraNera extends Head{
    public function Maschera(){
        echo "Hai indossato la prima maschera \n";
    }
}

class MascheraRossa extends Head{
    public function Maschera(){
        echo "Hai indossato la seconda maschera \n";
    }
}

// UPPERBODY
class Skinny extends UpperBody{
    public function Muscle(){
        echo "è esile \n";
    }
}

class Pumped extends UpperBody{
    public function Muscle(){
        echo "è massiccio\n";
    }
}
// BRACCIO DX
class Schiaffone extends ArmDx{
    public function Attacco(){
        echo "Sort d ceffon \n";
    }
}

class Pugno extends ArmDx{
    public function Attacco(){
        echo "Ha i pugni nelle mani \n";
    }
}
// BRACCIO SX
class Scudo extends ArmSx{
    public function Difesa(){
        echo "Esci lo scudo \n";
    }
}

class Schivata extends ArmSx{
    public function Difesa(){
        echo "Troppo lento! \n";
    }
}
// LOWERBODY
class SlideCancel extends Lowerbody{
    public function Movement(){
        echo "pro player\n";
    }
}

class Dropshot extends Lowerbody{
    public function Movement(){
        echo "pro player 2 \n";
    }
}

class Ironman{
    public $testa1;

    public $busto1;

    public $destra1;

    public $sinistra1;

    public $gambe1;


    public function __construct(Head $maschera1, UpperBody $muscle1, ArmDx $attacco1, ArmSx $difesa1, Lowerbody $movement1)
    {
        $this->testa1 = $maschera1;
   

        $this->busto1 = $muscle1;
   

        $this->destra1 = $attacco1;


        $this->sinistra1 = $difesa1;


        $this->gambe1 = $movement1;

    }

    public function setMask(){
        $this->testa1->Maschera();
    }

    public function BodyType(){
        $this->busto1->Muscle();
    }
    
    public function ChooseAttack(){
        $this->destra1->Attacco();
    }
    
    public function ChooseDefense(){
        $this->sinistra1->Difesa();
    }
    
      public function ChooseMovement(){
        $this->gambe1->Movement();
    }
    
    
}

$ironman = new Ironman(new MascheraNera, new Pumped, new Schiaffone, new Schivata, new SlideCancel);

$ironman2 = new Ironman(new MascheraNera, new Pumped, new Schiaffone, new Schivata, new Dropshot);

$ironman->setMask();
$ironman->BodyType();
$ironman->ChooseAttack();
$ironman->ChooseDefense();
$ironman->ChooseMovement();
$ironman2->setMask();
$ironman2->BodyType();
$ironman2->ChooseAttack();
$ironman2->ChooseDefense();
$ironman2->ChooseMovement();

print_r($ironman);