<?php
class Personnage{
    public $name;
    public $pointdevie;
    public function __construct($name,$pointdevie=100)
    {
        $this->name = $name;
        $this->pointdevie= $pointdevie;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function getPointdevie(){
        return $this->pointdevie;
    }
    public function attack($victime){
       $victime->pointdevie = $victime->pointdevie-$this->damages;
    }

}

class Guerrier extends Personnage{
    protected $damages = 15;
}

class Sorcier extends Personnage{
    protected $damages = 10;
}

$sorcier = new Sorcier('merlin');
echo $sorcier->getPointdevie();
$guerrier= new Guerrier('hercule');
$guerrier->attack($sorcier);
echo $sorcier->getPointdevie();

$sorcier->attack($guerrier);
echo $guerrier->getPointdevie();









?>