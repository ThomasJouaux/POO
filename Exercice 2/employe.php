<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

// phpinfo();

$result = 0;
$date = date('Y');
$dateComplet = date('M , Y');
$dateEnvoie = "Jun , 2022";
var_dump($dateComplet);
// $restaurant = "";
// $restaurant = "non";

  include 'magasin.class.php';
  include 'class.enfant.php';
  // include 'class.employe.php';
  

  $enf1 = new Enfant(18);
  $emp1  = new Employer("Rodger" , "Romain" , 2021 , "Agent de compta" , 2038, "comptabilité" );
  print_r($emp1);
  $mag1 = new Magasin("Jarditou80" , "30 rue du generale foy" , "80 000" , "Amiens"  ,  "Oui" , $emp1 );
  $mag1->setEmploye($emp1);
  $mag1 -> setEmploye($emp1);

  $emp2 = new Employer("Jouaux" , "Thomas" , 2000 , "agent d'entretien" , 1580 , "Nettoyage" );

  $mag1->setEmploye($emp2);

  print_r($mag1);

  $emp3 = new Employer("JsaisPas" , "Mohamed" , 1980  , "Agent de securité" ,  1750 , "Securité");

  $mag2 = new Magasin("Jarditou75" , "50 rue du marechal" , "75000" , "paris", "non" , $emp2);
  $mag2->setEmploye($emp3);
  print_r($mag2);

  $emp4 = new Employer("Grimaud" , "Julien" , 2018  , "Commercial" , 3500 , "Vendeur");
  $mag3 = new Magasin("Jarditou69" , "30 rue de la musique" , "69000" , "Ville" , "Oui" , $emp3);
  $mag3->setEmploye($emp4);
  print_r($mag3);

  $emp5 = new Employer("Kilouk" , "Djabi" , 1975 , "Directeur" , 8600 , "Direction génerale");
  $mag4 = new Magasin("Jarditou30" , "jsais aps" , "30000" , "villeinconnu" , "Oui" , $emp5);

  $mag4->setEmploye($emp5);
  print_r($mag4);

  echo "<br>";
  print_r("<br> Cela fait : ".$emp2->decompteAnnée($date)." ans que vous etes dans l'entreprise. <br>");
  print_r($emp2->primeAncien($result , $date , $dateComplet , $dateEnvoie)."<br>");
  print_r($emp2->primeSalaire($dateComplet , $dateEnvoie)."<br>");
  print_r($emp2->chequesVac($date)."<br>");
  print_r($mag1->ticketRestau()."<br>");
  echo "<br>";

  print_r("Cela fait : ".$emp1->decompteAnnée($date)." ans que vous etes dans l'entreprise. <br>");
  print_r($emp1->primeAncien($result , $date , $dateComplet , $dateEnvoie)."<br>");
  print_r($emp1->primeSalaire($dateComplet , $dateEnvoie)."<br>");
  print_r($emp1->chequesVac($date)."<br>");
  print_r($mag2->ticketRestau()."<br>");
  echo "<br>";

  print_r("Cela fait : ".$emp3->decompteAnnée($date)." ans que vous etes dans l'entreprise. <br>");
  print_r($emp3->primeAncien($result , $date , $dateComplet , $dateEnvoie)."<br>");
  print_r($emp3->primeSalaire($dateComplet , $dateEnvoie)."<br>");
  print_r($emp3->chequesVac($date)."<br>");
  print_r($mag3->ticketRestau()."<br>");
  echo "<br>";

  print_r("Cela fait : ".$emp4->decompteAnnée($date)." ans que vous etes dans l'entreprise. <br>");
  print_r($emp4->primeAncien($result , $date , $dateComplet , $dateEnvoie)."<br>");
  print_r($emp4->primeSalaire($dateComplet , $dateEnvoie)."<br>");
  print_r($emp4->chequesVac($date)."<br>");
  print_r($mag4->ticketRestau()."<br>");
  echo "<br>";

  print_r("Cela fait : ".$emp5->decompteAnnée($date)." ans que vous etes dans l'entreprise. <br>");
  print_r($emp5->primeAncien($result , $date , $dateComplet , $dateEnvoie)."<br>");
  print_r($emp5->primeSalaire($dateComplet , $dateEnvoie)."<br>");
  print_r($emp5->chequesVac($date)."<br>");
  print_r($mag4->ticketRestau()."<br>");
  echo "<br>";

   ?> 
  </body>
  </html>
