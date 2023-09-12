<?php


class Auto
{
    public string $merk;
    public string $type;
    public int $prijs;
    public string $kleur;

    public function __construct($merk, $type, $prijs, $kleur) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->kleur = $kleur;
        
    }
}
$mybmw = new Auto( merk: "BMW", type: "318i", prijs: 45677, kleur: "blauw");
$mybmw = new Auto( merk: "Audi", type: "A8", prijs: 34566, kleur: "chanpagne");