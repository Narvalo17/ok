<?php
  
 //model tout ce quiconcerne le sql et les db
  function dbconnect()
  { 

   /***************************************************/

  	$con=mysqli_connect('localhost','root','','pizzaboxinnodb');
    mysqli_query($con,"SET CHARACTER SET 'utf8'");
    echo "j'ouvre une connection";
    return $con;
  }

  function getLivreurAll()
  {
  /******************************CONNEXION SQL ******************************************/
  $con = dbconnect();
  $sql_req="select * from livreur;";/****************SELECT INFO PIZZA**********************/
  $req=mysqli_query($con,$sql_req);

  $tablLivr=mysqli_fetch_all($req, MYSQLI_ASSOC);
echo "<pre>";
  //var_dump($tablLivr);
echo "</pre>";
  mysqli_close($con);

  return $tablLivr;

}
//function getLivreur( $numlivreur)
//  {
//  /******************************CONNEXION SQL ******************************************/
//  $con = dbconnect();
//  $sql_req="select * from livreur where NROLIVR =".$numlivreur;
//  /****************SELECT INFO PIZZA**********************/
//  $req=mysqli_query($con,$sql_req);
//
//  $tablLivr=mysqli_fetch_all($req, MYSQLI_ASSOC);
//      echo "<pre>";
//  var_dump($tablLivr);
//      echo "</pre>";
//  mysqli_close($con);
//
//  return $tablLivr;
//
//}

  ?>