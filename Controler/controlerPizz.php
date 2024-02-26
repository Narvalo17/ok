<?php
include_once("../Model/modelPizz.php");

$tableau_pizza = getPizzas();
include_once("../Vue/vuePizz.php");