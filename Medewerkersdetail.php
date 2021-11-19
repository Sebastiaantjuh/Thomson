<?php
    session_start();
    if (empty($_SESSION['gebruikersnaam'] ))
    {
    header('location: Login.php');
    }
?>



<DOCTYPE html>
<html>
    <head>
        <title>Thomson Medewerker</title>
        <link rel="StyleSheet" type="text/css" href="css/Medewerker.css"/>
    </head>
    <body>
    <ul>
            <li><a href="Ingelogd.php">Home</a></li>
            <li><a href="Klachten.php">Klachten</a></li>
            <li><a class="active" href="medewerker.php">Medewerkers</a></li>
            <li><a href="gasten.php">Gasten</a></li>
            <li style="float:right"><a id="uitlogknop" href="Login.php">Uitloggen</a></li>
            <li style="float:left"><a id="terug" href="gasten.php">Terug</a></li>
    </ul>

    <div id="container">

<?php

    $id = $_GET['id'];




    include('db.php');
    $sql = "SELECT * FROM medewerker WHERE idmedewerker=$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Naam</th><th>Tussenvoegsel</th><th>Achternaam</th><th>Vesteging</th><th>Functie</th>
        <th>Email</th><th>Telefoonnummer</th></tr>";
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) 
        {
            $idmedewerker = $row["idmedewerker"];
            echo "<tr><td>" . $idmedewerker . "</td><td>" . $row["voornaam"] . "</td><td>" .$row["tussenvoegsel"] . "</td><td>" . 
            $row["achternaam"] . "</td><td>" . $row["vestiging"] . "</td><td>" . 
            $row["functie"] . "</td><td>" . $row["email"] . "</td><td>" . $row["telefoonnummer"] . "</td></tr>" . "<br>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }










?>
</div>

</body>
</html>