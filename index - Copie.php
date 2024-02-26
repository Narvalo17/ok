<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="pizza.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
<?php 
 
 

  /******************************CONNEXION SQL ******************************************/
  $con=mysqli_connect('localhost','root','','pizzaboxinnodb');
  mysqli_query($con,"SET CHARACTER SET 'utf8'");
  /***************************************************/
  $sql_req="select * from pizza;";/****************SELECT INFO PIZZA**********************/
  $req=mysqli_query($con,$sql_req);
  mysqli_close($con);


echo ("<div class='jumbotron'>");

echo("<a class='create btn btn-info' href='creerPizza.php'>Créer Pizza</a>");

echo("</div>"); 

echo ("<div class='container'>");
 


while ($ligne= mysqli_fetch_array($req))
{
	         
	          echo("<div class='col-sm-4 col-md-4 col-xs-12'>");

              echo("<img src='./imagespizz/".$ligne['NROPIZZ'].".jpg'>");

               echo("<div class='description'>");
                echo("<h2><b>".$ligne['DESIGNPIZZ']."</b></h2>");
                echo("<p><u>Prix :</u> ".$ligne['TARIFPIZZ']." euros</p>");

                echo("<a class='btn btn-info' href='modifPizza.php?numPizza=".$ligne['NROPIZZ']."'>Modifier</a>");
                echo("<a class='btn btn-info' href='deletePizza.php?numPizza=".$ligne['NROPIZZ']."'>Supprimer</a>");
               echo("</div>");
            echo("</div>");
 	   
}
 
echo("</div>"); 
 
?>
</body>
</html> 
