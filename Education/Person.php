<?php
include("EtudiantEnseignant.php");

class Person {
    public $nom = "";
    public $prenom = "";
    public $age = 0;
    private $emergencyContact = false;
    private $address = "";
    static $educateurs = [];

    public function __construct($nom, $prenom, $age) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->emergencyContact = false;
        self::$educateurs[] = $this; 
    }

    public function __toString() {
        return $this->nom ." ". $this->prenom ." ". $this->age ." ". $this->emergencyContact . $this::class;
    }

    public function toggleUrgent() {
        if ($this->emergencyContact == true) {
            $this->emergencyContact = false;
        }

        else {
            $this->emergencyContact = true;
        }
    }

    public function setAddress($address) {
        $this->address = $address;
    }


    public function getAddress() {
        return $this->address;
    }
/*
----------------------------------------------------------------------------
            MANIPULATION DES LISTES | METHODES STATIQUES
---------------------------------------------------------------------------- */

}