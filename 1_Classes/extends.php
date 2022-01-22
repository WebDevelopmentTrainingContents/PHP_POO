<?php

class Truc {
    private $_objet;
    public function _getObjet() {
        return $this->_objet;
    }
    public function _setObjet($objet) {
        $this->_objet = $objet;
    }
}

Class Machin extends Truc {
    private $_chose;
    public function _getChose() {
        return $this->_chose;
    }
    public function _setChose($chose) {
        $this->_chose = $chose;
    }
}
