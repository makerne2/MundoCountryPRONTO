<?php

function conn() {
   // $cnx = mysqli_connect("localhost", "id9920261_mariana12kerne", "27052003MA", "id9920261_mundocountry");
    $cnx = mysqli_connect("localhost", "root", "", "mundocountry"); 
    //$cnx = mysqli_connect("fdb22.awardspace.net", "2835193_mundocountry", "27052003MA", "2835193_mundocountry");
   // $cnx = mysqli_connect("sql107.byetcluster.com", "epiz_24467472", "7CjgS7C1lW", "epiz_24467472_mundocountry");
	 // $cnx = mysqli_connect("localhost", "id9920261_yasmin", "Yasmin210203", "id9920261_mundocountry");
	if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
?>