<?php 

include 'class.employe.php';

class Magasin {
    
    private $_nom ;
    private $_employes;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_restaurant;
    
    public function __construct($nom , $adresse , $codePostal , $ville,  $restaurant , $employes = Null ) {
        $this->_nom = $nom;
        $this->_employes = $employes;
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_restaurant = $restaurant;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getEmployes()
    {
        return $this->_employes;
    }
    public function getAdresse(){
        return $this->_adresse;
    }
    public function getCodePostal(){
        return $this->_codePostal;
    }
    public function getVille(){
        return $this->_ville;
    }
    public function getRestau(){
        return $this->_restaurant;
    }

    public function setNom($nom)
    {
        return $this->_nom = $nom;
    }
    public function setEmploye($employes)
    {
        return $this->_employes = $employes;
    }
    public function setAdresse($adresse)
    {
        return $this->_adresse = $adresse;
    }
    public function setCodePostal($codePostal)
    {
        return $this->_codePostal = $codePostal;
    }
    public function setVille($ville)
    {
        return $this->_ville = $ville;
    }
    public function setRestau($restaurant)
    {
        return $this->_restaurant = $restaurant;
    }
    
    public function ticketRestau(){
     if($this->_restaurant == "Oui"){
        return "Vous avez un restaurant d'entreprise";
     }else{
        return "Vous beneficiez des tickets restau";
     }
    }
}
    
    
  


  