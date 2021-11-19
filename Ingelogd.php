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
        <title>Thomson home</title>
        <link rel="StyleSheet" type="text/css" href="css/Ingelogd.css"/>
    </head>
    <body>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="Klachten.php">Klachten</a></li>
            <li><a href="medewerker.php">Medewerkers</a></li>
            <li><a href="gasten.php">Gasten</a></li>
            <li style="float:right"><a id="uitloggen" href="Login.php">Uitloggen</a></li>
        </ul>  
    </body>
</html>
