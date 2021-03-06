<?php
//index.php

// include the database class
include "database.php";

require_once('header.php');

if(isset($_POST['submit'])){

    $fields = ['voorletters', 'voorvoegsel', 'achternaam', 'gebruikersnaam', 'wachtwoord'];

    $error = false;

    foreach($fields as $field){
        if(!isset($_POST[$field]) || empty($_POST[$field])){
         $error = true;
    }
}

if(!$error){
    // store posted form values in variables
    $voorletters= $_POST['voorletters'];
    $voorvoegsel= isset($_POST['voorvoegsel']) ? $_POST['voorvoegsel'] : '';
    $achternaam= $_POST['achternaam'];
    $username= $_POST['uname'];
    $password= $_POST['pword'];


        
    $database = new database();
    // login function
    $database->registreer_medewerker($voorletters, $voorvoegsel, $achternaam, $gebruikersnaam, $wachtwoord);
 }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medewerker toevoegen</title>

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
            <div class="col-7">
                <img class="img-fluid blur" style="float: left;" src="image/bloemenvelden.jpg" alt="bloemenvelden">
            </div>

        <div class="col-3 ruimte border shadow p-3 mb-5 bg-white rounded registreer">
            <form class="form-signin" action="" method="post">
            <h1 class="h3 mb-3 font-weight-normal">Medewerker toevoegen</h1>

                <label for="voorletters">voorletters</label>
                <input type="text" name="voorletters" class="form-control" required="">
                <br>

                <label for="voorvoegsel">Voorvoegsel</label>
                <input type="text" name="voorvoegsel" class="form-control">
                <br>

                <label for="achternaam">Achternaam</label>
                <input type="text" name="achternaam" class="form-control" required="">
                <br>

                <label for="Gebruikersnaam">Gebruikersnaam</label>
                <input type="text" name="uname" class="form-control" required="">
                <br>

                <label for="Wachtwoord">Wachtwoord</label>
                <input type="password" name="pword" class="form-control" required="">
                <br>

                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="submit">
                <br>
                <button type="button" class="btn btn-primary btn-lg btn btn-light"><a href="medewerker.php">terug</a></button>
            </form>
        </div>
    </div>
</div>  
</body>

<?php
require_once('footer.php');
?>