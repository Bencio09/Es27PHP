<?php
include "./connessione.php";
session_start();
?>

<html>

<head>
    <title>Votazioni</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
    <script src="../JS/bootstrap.js"></script>
</head>

<body style="background-color: orange;">
    <h3 style="text-align: center;">BENVENUTI NEL NUOVO SISTEMA ELETTORALE ELETTRONICO </h3>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-5" style="background-color: gray; border: yellow solid 5px; color: white;">
                <p>La prima fase del voto prevede la selezione della lista</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-5" style="background-color: greenyellow; border: yellow solid 5px;">
                <p>Scelga la lista a cui assegnare il suo voto dall'elenco a comparsa qui sotto</p>
            </div>
            <div class="col-3">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-5" style="background-color: greenyellow; border: yellow solid 5px; text-align: center;">
                <br>
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Liste
                    </a>

                    <?php
                    $query = "SELECT liste.nome_lista FROM liste order by liste.nome_lista";
                    $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                    $row = mysqli_fetch_assoc($result);
                    echo "$row[nome_lista]";

                    ?>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                    </ul>
                </div>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Liste
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php
                        while ($row = mysqli_fetch_assoc ($result)){
                        echo '<li><a class="dropdown-item" href="#">', $row["nome_lista"],' </a></li>';
                        }
                        ?>

                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <form action="./Pages/lista.php">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Invia">
                    <br>
                </form>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>


</body>

</html>