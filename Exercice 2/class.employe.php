<?php 



class Employer{
    
    private $_nom ;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste; 
    private $_salaire; 
    private $_service; 
    private $_magasin;
    private $_enfant;
  
    public static $_date;


    public function __construct($nom, String $prenom, $dateEmb, $poste = Null, $salaire = Null, $service = Null, Magasin $magasin = Null , Enfant $enfant = Null ) {
        $_date = new DateTime();
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateEmbauche = $dateEmb;
        $this->_poste = $poste;
        $this->_salaire = $salaire;
        $this->_service = $service;
        $this->_magasin = $magasin;
        $this->_enfant = $enfant;
        
    }

   public function getNom()
   {
       return $this->_nom;
   }
   public function getPrenom()
   {
       return $this->_prenom;
   }
   public function getEmbauche()
   {
       return $this->_dateEmbauche;
   }
   public function getPoste(){
       return $this->_poste;
   }
   public function getSalaire(){
       return $this->_salaire;
   }
   public function getService(){
       return $this->_service;
   }
   public function getMagasin(){
       return $this->_magasin;
   }
   public function getEnfant(){
    return $this->_enfant;
   }

   public function setNom($nom)
   {
       return $this->_nom = $nom;
   }
   public function setEnfant($age){
    return $this->_age = $age;
   }
//    public function getPrenom()
//    {
//        return $this->prenom;
//    }
//    public function getEmbauche()
//    {
//        return $this->dateEmbauche;
//    }
//    public function getPoste(){
//        return $this->poste;
//    }
//    public function getSalaire(){
//        return $this->salaire;
//    }
//    public function getService(){
//        return $this->service;
//    }

  public function setEmployer($_nom , $_prenom , $_dateEmbauche , $_poste , $_salaire , $_service , $_enfant){
      $this->_nom = $_nom;
      $this->_prenom = $_prenom; 
      $this->_dateEmbauche = $_dateEmbauche;
      $this->_poste = $_poste;
      $this->_salaire = $_salaire;
      $this->_service = $_service;
      $this->_enfant = $_enfant;
      return true;
  }

    public function decompteAnnée($date){
        // echo $this->_date;
        $result = abs($this->_dateEmbauche - $date);
        return $result;

    }
    
    public function primeAncien($result ,$date , $dateComplet , $dateEnvoie){
        $result = abs($date - $this->_dateEmbauche);
        $resultPrimeAncien = (($this ->_salaire * 2)/100) * $result;
        if($resultPrimeAncien != null ){
        if($dateComplet == $dateEnvoie){
            return "L'ordre de virement a bien ete envoyer";
        } else {
            return "Impossible d'envoyer le virement , la date d'envoie est mauvaise";
        }
    }
    die();
    }


      public function primeSalaire($dateComplet , $dateEnvoie){
        $resultPrimeSalaire = ($this->_salaire * 5)/100;
        if($resultPrimeSalaire != null){
            if($dateComplet == $dateEnvoie){
                return "L'odre de virement a bien été envoyer";
            } else {
                return "Impossible d'envoyer le virement , la date d'envoie est mauvaise";
            }
        }
     }

     public function chequesVac($date){
        $resultChequeVac = abs($date - $this->_dateEmbauche);
        if($resultChequeVac >= 1){
            return "Vous pouvez beneficié des cheques vacances";
        }else{
            return "vous n'etes pas assez ancien dans l'entreprise pour beneficier des cheques vacances";
        }

     }
    //  public function __destruct() {
        
    //  }

}
    
    
  


  