<?php

class User {
    public $nom;
    public $prenom;
    private $_email;
    private $_motDePasse;
    public $theme;

    public function getEmail() {
        return $this->_email;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }

    public function getMotDePasse() {
        return $this->_motDePasse;
    }
    public function setMotDePasse($mdp) {
        $this->_motDePasse = $mdp;
    }
}
