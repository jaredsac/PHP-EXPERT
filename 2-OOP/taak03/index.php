<?php
class Producten{
    public $merk;
    public $Kleur;
    public $type;
    public $prijs;
}



$nieuweProducten = new Producten();
    $nieuweProducten->merk = 'Hema';
    $nieuweProducten->kleur = 'rood';
    $nieuweProducten->type = 'lang';
    $nieuweProducten->prijs = '10';
  
    echo $nieuweProducten->merk . "<br>";
    echo $nieuweProducten->kleur . "<br>" ;
    echo $nieuweProducten->type . "<br>";
    echo $nieuweProducten->prijs . "<br>";

$nogEenNieuweProducten = new Producten();

    $nogEenNieuweProducten->merk  = 'Aegon';
    $nogEenNieuweProducten->kleur = 'grijs';
    $nogEenNieuweProducten->type  = 'gts505';
    $nogEenNieuweProducten->prijs = '50';
    
    echo $nogEenNieuweProducten->merk . "<br>";
    echo $nogEenNieuweProducten->kleur . "<br>";
    echo $nogEenNieuweProducten->type . "<br>";
    echo $nogEenNieuweProducten->prijs . "<br>";