<?php
class CompteBancaire
{

    private $solde;
    private $titulaire;

    public function __construct($titulaire)
    {

        $this->solde = 0;
        $this->titulaire = $titulaire;
    }

    public function deposer($montant)
    {
        $this->solde += $montant;
        echo "+\${$montant} has been deposited to {$this->titulaire} <hr>";
    }

    public function retirer($montant)
    {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;

            echo "-\${$montant} has been withdrawn from {$this->titulaire} <hr>";
        } else {
            echo "Unsifficent funds. <hr>";
        }
    }

    public function afficherSolde() {
        echo "Balance: \${$this->solde} <hr>";
    }
}

$acc1 = new CompteBancaire("Yasser Dalali");
$acc2 = new CompteBancaire("Houssam Baka");
$acc1->deposer(400);
$acc1->retirer(100);
$acc1->afficherSolde();

