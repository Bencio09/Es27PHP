<?php
session_start();
include "./Pages/connessione.php";
//echo var_dump($_SERVER);
   
?>

<html>

<head>
    <link rel="stylesheet" href="./CSS/bootstrap.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <br>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control-plaintext" id="staticEmail" name="username">
                </div>
            </div>
            <br>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password">
                </div>
            </div>
            <?php
                $query = "SELECT user.username FROM user WHERE username = $username AND password = $password";
                $result = mysqli_query($connessione, $query) or die("Query fallita " . mysqli_error($connessione) . " " . mysqli_errno($connessione));

                echo $row=mysqli_fetch_array($result, MYSQLI_NUM);
            ?>
            



        </form>
    </div>
</body>

</html>