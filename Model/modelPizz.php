<?php
  
 //model tout ce quiconcerne le sql et les db
  function dbconnect()
  { 

   /***************************************************/

  	$con=mysqli_connect('localhost','root','','pizzaboxinnodb');
    mysqli_query($con,"SET CHARACTER SET 'utf8'");
    echo "j'ouvre une cpnnection";
    return $con;
  }

  function getPizzas()
  { 
  /******************************CONNEXION SQL ******************************************/
  $con = dbconnect();
  $sql_req="select * from pizza;";/****************SELECT INFO PIZZA**********************/
  $req=mysqli_query($con,$sql_req);

  $tablopizza=mysqli_fetch_all($req, MYSQLI_ASSOC);
echo "<pre>";
 // var_dump($tablopizza);
echo "</pre>";
  mysqli_close($con);

  return $tablopizza;

}
function getPizzasNum( $numpizza)
  { 
  /******************************CONNEXION SQL ******************************************/
  $con = dbconnect();
  $sql_req="select * from pizza where NROPIZZ =".$numpizza;
  /****************SELECT INFO PIZZA**********************/
  $req=mysqli_query($con,$sql_req);

  $tablopizza=mysqli_fetch_all($req, MYSQLI_ASSOC);
      echo "<pre>";
  //var_dump($tablopizza);
      echo "</pre>";
  mysqli_close($con);

  return $tablopizza;

}

function delPizzasNum( $numpizza){  
                 echo(" je vais  supprimer la pizza numéro " . $numpizza  ); 
                 die(); }


  ?>