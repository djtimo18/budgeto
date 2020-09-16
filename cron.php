<?php
require ('config.php');



  $query1 = "SELECT * FROM `virement`";
  $result1 = mysqli_query($conn,$query1) or die(mysql_error());
  $gestion1 = mysqli_fetch_array($result1);


  $sth5 = $bdd->prepare("SELECT type FROM virement");
  $sth5->execute();
  $type_virement = $sth5->fetchAll(PDO::FETCH_ASSOC);

 
if ($type_virement == "1"){
  foreach ($code_virement as $a){
    echo $code_virement;
  }
}

//foreach ($code_user)
/*
  if ($gestion1['type'] == "1"){
      $code = $gestion2['code'];
      $solde = $gestion2['solde'];
      $montant = 
      $new_solde = $solde + $montant;
      
      $query3 = "UPDATE `solde` FROM `user` VALUE '$new_solde'";
      $result3 = mysqli_query($conn,$query3) or die(mysql_error());
      if ($query3){
      }

  } */



/* Pour chaque TYPE=1 :
    $code = code du user
    $solde = solde du user 
    $montant = montant du virement
    $new_solde = $solde + $montant
    query = UPDATE de $solde
    executé la $query

*/

/*Pour chaque $code_virement:
    selectionner le premier virement:
    $montant = son montant
    $solde = solde du user
    $new_montant = $solde + $montant
    query = UPDATE new-montant -> $solde
*/
?>