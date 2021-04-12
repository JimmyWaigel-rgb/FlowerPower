<?php

// $title contains the title for the page
$title = "overzicht";

require_once('header.php');
?>

<?php
    include 'database.php';
    $db = new database();
    $eten = $db->select("SELECT eten.eten_ID, voorgerechten.voorgerechten_ID, hoofdgerechten.hoofdgerechten_ID, taart_dessert.taart_dessert_ID, vooral_voor_de_kleintjes.vooral_voor_de_kleintjes_ID
    FROM eten
    INNER JOIN voorgerechten
    ON voorgerechten.voorgerechten_ID = voorgerechten.voorgerechten_ID
    INNER JOIN hoofdgerechten
    ON hoofdgerechten.hoofdgerechten_ID = hoofdgerechten.hoofdgerechten_ID
    INNER JOIN taart_dessert
    ON taart_dessert.taart_dessert_ID = taart_dessert.taart_dessert_ID
    INNER JOIN vooral_voor_de_kleintjes
    ON vooral_voor_de_kleintjes.vooral_voor_de_kleintjes_ID = vooral_voor_de_kleintjes.vooral_voor_de_kleintjes_ID", []);
    // print_r($winkels);

    $columns = array_keys($eten[0]);
    $row_data = array_values($eten);
?>

<table class="table table-hover">
    <tr>
        <?php

            foreach($columns as $column){ 
                echo "<th><strong> $column </strong></th>";
            }

        ?>
    </tr>

    <?php
        foreach($row_data as $row){ ?>
        <tr>
        <?php
        foreach($row as $data){
            echo "<td> $data </td>";
        }

        }
?>
    </tr>

</table>