<?php
//index.php

// start the session
session_start();

// include the database class
include "database.php";
require_once('header.php');


?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body> 
<div class="container-fluid">
        <div class="row">
            <div class="col-7" style="padding: 0;">
                <img class="img-fluid blur" style="float: left;" src="image/bloemenvelden.jpg" alt="bloemenvelden">
            </div>

        <div class="col-3 ruimte">
            <form class="form-signin" action="" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Registrieren FlowerPower</h1>

                <label for="Voornaam">Voornaam</label>
                <input type="text" name="voornaam" class="form-control" >
                <br>

                <label for="Tussenvoegsel">Tussenvoegsel</label>
                <input type="text" name="tussenvoegsel" class="form-control">
                <br>

                <label for="Achternaam">Achternaam</label>
                <input type="text" name="achternaam" class="form-control" >
                <br>

                <label for="E-mail">E-mail</label>
                <input type="text" name="email" class="form-control" >
                <br>

                <label for="Username">Gebruikersnaam</label>
                <input type="text" name="username" class="form-control" >
                <br>

                <label for="Wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" class="form-control" >
                <br>

                <label for="Password">Herhaal Wachtwoord</label>
                <input type="password" name="herhaal-wachtwoord" class="form-control" >
                <br>

                <input type="submit" name="Registreren" class="btn btn-lg btn-success btn-block" value="Registreren">
                <a href="loginCustomer.php" id="zwart" class="btn btn-link" role="button">Login</a>
            </form>
        </div>
    </div>
</div>  
</body>

<?php
require_once('footer.php');
?>