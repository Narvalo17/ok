<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pizza.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body>
<?php 
 
 



echo ("<div class='jumbotron'>");
echo "<h1 class='text-center'>ma liste de Pizzas</h1>";
echo  "<p class='text-center'>Bootstrap is the most popular HTML, CSS...</p>";

echo("<a class='create btn btn-info' href='creerPizza.php'>Créer Pizza</a>");
 
echo("</div>"); 
 
echo ("<div class='container'>");
 

foreach($tableau_pizza as $ligne)
{
	         
	          echo("<div class='col-sm-4 col-md-4'>");

              echo("<img src='../images/".$ligne['NROPIZZ'].".jpg'>");

               echo("<div class='description'>");
                echo("<h2><b>".$ligne['DESIGNPIZZ']."</b></h2>");
                echo("<p><u>Prix :</u> ".$ligne['TARIFPIZZ']." euros</p>");

    echo("<a class='btn btn-info' href='controller.php?action=modif&numPizza=".$ligne['NROPIZZ']."'>Modifier</a>");
                
    echo("<a class='btn btn-info' href='controller.php?action=supp&numPizza=".$ligne['NROPIZZ']."'>Supprimer</a>");


                echo("<a class='btn btn-info' href='controller.php?numPizza=".$ligne['NROPIZZ']."'>Editer</a>");
               echo("</div>");
            echo("</div>");
 	   
}
 
echo("</div>"); 
 
?>
</body>
</html> 
 