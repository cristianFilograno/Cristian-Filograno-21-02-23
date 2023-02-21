<?php 

abstract class Monitor{
    public abstract function SetMonitor();
}

abstract class Ram{
    public abstract function SetRam();
}

abstract class SchedaVideo{
    public abstract function SetVideo();
}

abstract class OutputAudio{
    public abstract function SetAudio();
}

abstract class Cpu{
    public abstract function SetCpu();
}


class Monitor12 extends Monitor{
    public function SetMonitor(){
        echo "Stai usando un monitor da 12 Pollici\n";
    }
}

class Monitor16 extends Monitor{
    public function SetMonitor(){
        echo "Stai usando un monitor da 16 Pollici\n";
    }
}


class Ram8 extends Ram{
    public function SetRam(){
        echo "Stai usando una RAM da 8GB\n";
    }
}

class Ram16 extends Ram{
    public function SetRam(){
        echo "Stai usando unna RAM da 16GB\n";
    }
}

class Amd extends SchedaVideo{
    public function SetVideo(){
        echo "Stai usando una scheda AMD\n";
    }
}

class Nvidia extends SchedaVideo{
    public function SetVideo(){
        echo "Stai usando una scheda NVIDIA\n";
    }
}

class Altoparlanti extends OutputAudio{
    public function SetAudio(){
        echo "Come output audio usiamo gli Altoparlanti\n";
    }
}

class Cassa extends OutputAudio{
    public function SetAudio(){
        echo "Come output audio usiamo delle Casse esterne\n";
    }
}

class Amd7 extends Cpu{
    public function SetCpu(){
        echo "Usera AMD7 come CPU\n";
    }
}

class Intel extends Cpu{
    public function SetCpu(){
        echo "Usera Intel i9 come CPU\n";
    }
}


class Pc1{
    public $monitor;
    public $ram;
    public $video;
    public $audio;
    public $cpu;


public function __construct(Monitor $monitor, Ram $ram, SchedaVideo $video, OutputAudio $audio, Cpu $cpu){
    $this->monitor = $monitor;
    $this->ram = $ram;
    $this->video = $video;
    $this->audio = $audio;
    $this->cpu = $cpu;

}

public function setMon(){
    $this->monitor->SetMonitor();
}

public function setR(){
    $this->ram->SetRam();
}

public function setV(){
    $this->video->SetVideo();
}

public function setA(){
    $this->audio->SetAudio();
}

public function setC(){
    $this->cpu->SetCpu();
}

}

$pc1 = new Pc1(new Monitor12, new Ram16, new Nvidia, new Cassa, new Intel);

$pc1->SetMon();
$pc1->SetR();
$pc1->SetV();
$pc1->setA();
$pc1->SetC();

