<?php

class robot{
    public $naam;
    public $sound;
    public $voortstuwing;

    function setSound($sound_paramter){
        $this->sound = $sound_paramter;
    }

    function getsound(){
        return $this->sound;
    }
}

$wally = new Robot();
$wally->naam = 'Wal-e';
$wally->voortstuwing = 'rollend';
$wally->setSound('beepboop');
echo $wally->getSound();

$wolly = new Robot();
$wolly->naam = 'Wol-e';
$wolly->voortstuwing = 'lopend';
$wolly->setSound('boopbeep');
echo $wolly->getSound();