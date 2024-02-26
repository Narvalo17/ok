<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./livreur.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
<?php 
 
 



echo ("<div class='jumbotron'>");
echo "<h1 class='text-center'>Liste des livreurs</h1>";
//echo  "<p class='text-center'>Bootstrap is the most popular HTML, CSS...</p>";

//echo("<a class='create btn btn-info' href='creerPizza.php'>Créer Pizza</a>");
 
echo("</div>"); 
 
echo ("<div class='container'>");
 

foreach($livreur as $ligne)
{
	         
	          echo("<div class='col-sm-4 col-md-4'>");

              echo("<img src='../imagesLivr/".$ligne['NROLIVR'].".jpg'>");

               echo("<div class='description'>");
                echo("<h2><b>".$ligne['NOMLIVR']."</b></h2>");
                echo("<p><u>Prénom :</u> ".$ligne['PRENOMLIVR']." </p>");

    echo("<a class='btn btn-info' href='controller.php?action=modif&numPizza=".$ligne['NROLIVR']."'>Modifier</a>");
                
    echo("<a class='btn btn-info' href='controller.php?action=supp&numPizza=".$ligne['NROLIVR']."'>Supprimer</a>");


                echo("<a class='btn btn-info' href='controller.php?numPizza=".$ligne['NROLIVR']."'>Editer</a>");
               echo("</div>");
            echo("</div>");
 	   
}
 
echo("</div>"); 
 
?>
</body>
</html> 
 