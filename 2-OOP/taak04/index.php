<?php
class scooter{
    public $merk;
    public $kleur;
    public $inhoudTank;

    function checkInhoudTank(){
        if($this ->inhoudTank == 0){
            Echo "Tank is leeg"."<br>";
        }else{
            echo "tank is nog niet leeg"."<br>";
        }
    }
}

$vespa = new scooter();
$vespa->merk = "vespa"; 
$vespa->kleur = "Lichtblauw";
$vespa->inhoudTank = 8;
$vespa->checkInhoudTank();

$sym = new scooter();
$sym->merk = "sym";
$sym->kleur = "rood";
$sym->inhoudTank = 0;
$sym->checkInhoudTank();