<?php
include("Person.php");

class Etudiant extends Person
{
    private $notes;
    public function __construct($nom, $prenom, $age)
    {
        parent::__construct($nom, $prenom, $age);
        $this->notes = [];
    }

    public function insertNote($note)
    {
        $this->notes[] = $note;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function calculer_moyenne()
    {
        $total = 0;
        $quot = 0;
        for ($i = 0; $i < count($this->notes); $i++) {
            $total += $this->notes[$i];
            $quot += 1;
        }

        return $total/$quot;
    }
}

class Enseignant extends Person
{
    private $matieres_enseignees;
    public function __construct($nom, $prenom, $age)
    {
        parent::__construct($nom, $prenom, $age);
        $this->matieres_enseignees = [];
    }

    public function insertMatier($matier)
    {
        $this->matieres_enseignees[] = $matier;
    }

    public function getMatiers()
    {
        return $this->matieres_enseignees;
    }
}
