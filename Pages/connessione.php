<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "es27PHP";

    
    $connessione = mysqli_connect($host,$user,$pass,$db) or die ("<br>Errore di connessione" . mysqli_error($connessione) . " ". mysqli_errno($connessione));  
?>