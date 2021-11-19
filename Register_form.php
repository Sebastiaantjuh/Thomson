<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="StyleSheet" type="text/css" href="css/Register.css"/>
    </head>
    <body>
        <div class="header">
            <img src="img/thomsonlogo.png" alt="thomson logo" width="180" height="119">
        </div>
        <div id="container">
        <form action="register.php" method = "post">
            <h2>Register</h2>
            <br>
            <h4>Voornaam</h4>
            <input type="text" name="Voornaam" placeholder="Voornaam">
            <br>
            <h4>Tussenvoegsel</h4>
            <input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel">
            <br>
            <h4>Achternaam</h4>
            <input type="text" name="Achternaam" placeholder="Achternaam">
            <br>
            <h4>Vestiging</h4>
            <input type="text" name="Vestiging" placeholders="Vestiging">
            <br>
            <h4>Functie</h4>
            <input type="text" name="Functie" placeholder="Functie">
            <br>
            <h4>Email</h4>
            <input type="text" name="Email" placeholder="Email">
            <br>
            <h4>Telefoonnummer</h4>
            <input type="text" name="Telefoonnummer" placeholder="Telefoonnummer">
            <br>
            <h4>Gebruikersnaam</h4>
            <input type="text" name="Gebruikersnaam" placeholder="Gebruikersnaam">
            <h4>Wachtwoord</h4>
            <input type="password" name="Wachtwoord" placeholder="Wachtwoord">
            <br>
            <h4>Herhaal Wachtwoord</h4>
            <input type="password" name="Herhaal wachtwoord" placeholder="Herhaal Wachtwoord">
            <br>
            <br>
            <input type="submit" id="Knop" value="Register" name="register">
        </form>
        </div>
        <?php ?>
    </body>
</html>

            