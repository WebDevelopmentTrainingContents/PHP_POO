<?php 
    class User{

        public $prenom;
        public $nom;
        public $theme;
        private $_email;
        private $_password;

        public function getEmail() {
            return $this->_email;
        }
        public function setEmail($email) {
            $this->_email = $email;
        }
     
        public function getPass() {
            return $this->_password;
        }
        public function setPass($password) {
            $this->_password = $password;
        }
    }
?>