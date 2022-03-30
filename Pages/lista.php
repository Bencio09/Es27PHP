<?php
include "./connessione.php";
session_start();
?>

<html>

<head>
    <title>Votazioni</title>
    <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                <?php
                    $query = "SELECT liste.nome_lista FROM liste order by liste.nome_lista";
                    $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));
                ?>
                

                <form action="./Pages/lista.php">
                    <br>
                    <select id="list" name="list">
                        <?php
                            while ($row = mysqli_fetch_assoc ($result)){
                            echo "<option value='$row[nome_lista]'>', $row[nome_lista],'</option>";
                            }
                        ?>
                    </select>
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