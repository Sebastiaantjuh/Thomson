<?php
session_start();
if (empty($_SESSION['gebruikersnaam'] ))
{
    header('location: Login.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thomson klachten</title>
        <link rel="StyleSheet" type="text/css" href="css/Klachten_Gasten.css"/>
    </head>
    <body>
    <ul>
            <li><a href="Ingelogd.php">Home</a></li>
            <li><a class="active" href="#">Klachten</a></li>
            <li><a href="medewerker.php">Medewerkers</a></li>
            <li><a href="gasten.php">Gasten</a></li>
            <li style="float:right"><a id="uitlogknop" href="Login.php">Uitloggen</a></li>
    </ul>
    <div id="container">

    <?php

    include('db.php');
    $sql = "SELECT * FROM klacht";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>ID gast</th><th>Beschrijving</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $idklacht = $row["idklacht"];
            echo "<tr><td>" . "<a href='klachtendetail.php?id=$idklacht'>" . $idklacht . "</a></td><td>" . $row["gast_idgast"] . "</td><td>" . 
                $row["beschrijving"] . "</td></tr>" . "<br>";

        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>


    </div>

















</html>