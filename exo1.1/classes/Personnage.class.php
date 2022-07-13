<?php
class Personnage{
    private $nom;
    private $prenom;
    private $age; 
    private $sexe;

     public function getNom()
     {
         return $this->nom;
     }
     public function getPrenom()
     {
         return $this->prenom;
     }
     public function getAge()
     {
         return $this->age;
     }
     public function getSexe()
     {
         return $this->sexe;
     }

     public function setPersonnage($_nom , $_prenom , $_age , $_sexe){
        $this->nom = $_nom ;
        $this->prenom = $_prenom;
        $this->age = $_age;
        $this->sexe = $_sexe;
    }
    
     }


