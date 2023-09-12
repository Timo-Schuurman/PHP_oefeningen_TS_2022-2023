<?php

class AutoOverzicht
{
    public array $autos;

    public function __construct() {
        $this->autos = [];
    }
    public function add($auto) {
        $this->autos[] = $auto;
    }

    public function getMerken() {
        $merken = [];
        foreach($this->autos as $auto) {
            if(!in_array($auto->merk, $merken)) {
                $merken[] = $auto->merk;
            };
        }

        return $merken;
    }

    public function filterByMerk($merk="alle") {
        $gefilterde_autos = [];
        if($merk == "alle") {
            $gefilterde_autos = $this->autos;
        } else {
            	foreach($this->autos as $auto) {
                    if($auto->merk == $merk) {
                        $gefilterde_autos[] = $auto;
                    }
                }
        }
        return $gefilterde_autos;
    }
}