<?php
class Emmer{
    $inhoud;
    $kleur;

    //deze functie controleert of de emmer vol is ja of nee
    function checkInhoud(){ 
        if($this->inhoud == 100){
            echo 'De emmer is vol!';
            }
        else{
            echo 'de emmer is niet vol';
        }
    }
}

