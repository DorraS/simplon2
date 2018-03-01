<?php

/**
 * Créer des classes Dog et et Cat étendant Pet et implémentant l'interadce Animal
 *
 * Methode de Animal :
 *   - Cry() // Affiche le nom du crie de l'animal
 *   - Run() // Affiche la vitesse a laquelle l'animal court
 * Propriété de Animal :
 *    - $speed
 *    - $cryName
 *
 * Methode de Pet
 *   - Sleep() // Affiche le temps d'une sieste d'un animal
 * Proprieté de Pet
 *   - SleepTime
 *
 * Il faut passer les paramètres $sleepTime, $speed, $cryName dans le constructeur
 *
 *
 * Créer ensuite 3 chats et 2 chiens, les mettres dans un tableau
 * Parcourir le tableau et afficher soit le cri, la vitesse ou son temps de sieste.
 */



/*exemple
 class human{
    public $name;
    public function getname(){
        return $this->name;
    }
    public function setname($name){


    }

 }

 $human1= new human();
 $human1->name= "dorra";
 $human2=new human();
 $human2->name= "nico";
 echo $human1->getname();
 echo $human2->getname();
*/

interface Animal{

    public function getcry();

    public function run();
    public function sleeptime();
}


class Pet implements Animal {
    protected $sleepTime;
    protected $speed;
    protected $cryName;

    public function getcry(){
        return $this->cryName;

    }
    public function run(){
        return $this->speed;
    }
    public function sleeptime(){
        return $this->sleepTime;
    }
    public function __construct($sleepTime, $speed, $cryName){
        $this->sleepTime =$sleepTime;
        $this->speed= $speed;
        $this->cryName=$cryName;
    }
}

class Dog extends Pet{


}

$dog =new Dog(10,50,'awoo');
echo $dog->getcry();
echo $dog->sleepTime();



class Cat extends Pet{

}
$pets = array();
$pets[]= new Cat(5,70,'miaw');
$pets[]= new Cat(6,65,'miaw');
$pets[]= new Cat(8,50,'gren');
$pets[]= new Dog(10,40,'haou');
$pets[]= new Dog(9,60,'aaaghgs');
echo '<pre>';
var_dump($pets);
$methods= array('sleepTime','getcry','run');

foreach ($pets as $key=>$value){
    $rand= rand(0,2);
    $method= $methods[$rand];
    echo $value->$method();

}