<?php
class Auto{
    public $Merk;
    public $Kleur;
    public $type;
    public $uitvoering;
    public $brandstof;
  }
  
  $nieuweAuto = new Auto(); 
  $nieuweAuto->merk = 'Tesla';
  $nieuweAuto->kleur = 'rood';
  $nieuweAuto->type = 'model 3';
  $nieuweAuto->uitvoering = 'cabrio';
  $nieuweAuto->brandstof = 'elektrisch';
  
  echo $nieuweAuto->merk . "<br>";
  echo $nieuweAuto->kleur . "<br>" ;
  echo $nieuweAuto->type . "<br>";
  echo $nieuweAuto->uitvoering . "<br>";
  echo $nieuweAuto->brandstof . "<br>";
  
  $nogEenNieuweAuto = new Auto();