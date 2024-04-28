<?php

    class GestionnaireClients {
        private $clients = [];


        public function __construct() {
            $this->clients = [];
        }

        public function addClient($client) {
            $this->clients[] = $client;
        }

        public function RechercherClient($id) {
            echo $this->clients[$id];
        }        

        public function AfficherListeClients() {
            for ($i = 0; $i < count($this->clients); $i++) {
                echo $this->clients[$i] . "<hr>";
        }        
    }
}

$BaseClientelle = new GestionnaireClients();
$BaseClientelle->addClient("Yasser Dalali");
$BaseClientelle->addClient("Nourdinne Hamouchi");
$BaseClientelle->addClient("Abuhssira Ishaq");

$BaseClientelle->AfficherListeClients();