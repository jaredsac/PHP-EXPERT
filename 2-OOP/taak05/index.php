<?php

class lamp{
    public $naam;
    public $status;
    public $kleur;
    public $helderheid;

    function setStatus($status_parameter){
        $this->status = $status_parameter;
    }
}

$woonkamerLamp = new lamp();
$woonkamerLamp->kleur = "geel";
$woonkamerLamp->helderheid = "zacht";
$woonkamerLamp->setStatus('ON');
echo $woonkamerLamp->status;



$keukenLamp = new lamp();
$keukenLamp->kleur = "wit";
$keukenLamp->helderheid = "vel";
$keukenLamp->setStatus('');
echo $keukenLamp->status;



