<?php  

// Exemple de classe dans laquelle on définit directement les valeurs :
class Voiture {
    public $couleur = "rouge";
    public $annee = 2010;
    private $plaque = 'AA000BB';
    public function demarrer()
    {
        return "Je démarre comme ça...";
    }
    public function carburant($carburant)
    {
        return "Je roule..." . $carburant;
    }
    public function plaque($plaque)
    {
        return "Ma plaque est : " . $plaque;
    }

    public function getPlaque() {
        return $this->plaque;
    }
    public function setPlaque($plaque) {
        $this->plaque = $plaque;
    }
}

?>