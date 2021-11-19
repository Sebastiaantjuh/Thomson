<?php
session_start();

//database
$dbhost = 'localhost'; //host name
$dbuser = 'root'; //Username host
$dbww = 'fendtvario1050'; //database password
$dbname = 'thomson'; //database name
$dbport = 3307;

//Connect to server and select database
$conn = mysqli_connect($dbhost, $dbuser, $dbww, $dbname, $dbport);

//Check connection

if (!$conn){
    die("connection failed: ". mysqli_connect_error());
}

//Values ophalen
$voornaam = mysqli_real_escape_string($conn, $_POST['Voornaam']);
$tussenvoegsel = mysqli_real_escape_string($conn, $_POST['Tussenvoegsel']);
$achternaam = mysqli_real_escape_string($conn, $_POST['Achternaam']);
$vestiging = mysqli_real_escape_string($conn, $_POST['Vestiging']);
$functie = mysqli_real_escape_string($conn, $_POST['Functie']);
$email = mysqli_real_escape_string($conn, $_POST['Email']);
$telefoonnummer = mysqli_real_escape_string($conn, $_POST['Telefoonnummer']);
$gebruikersnaam = mysqli_real_escape_string($conn, $_POST['Gebruikersnaam']);
$wachtwoord = mysqli_real_escape_string($conn, $_POST['Wachtwoord']);

$sql = "INSERT INTO medewerker (voornaam, tussenvoegsel, achternaam, vestiging, functie, email, telefoonnummer, gebruikersnaam, wachtwoord)
VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$vestiging', '$functie', '$email', '$telefoonnummer', '$gebruikersnaam', '$wachtwoord')";


$result = mysqli_query($conn, $sql);
if (!$result) {
    echo mysqli_error($conn);
} else{
    $message = "registered succesfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Refresh:0.1; url=Ingelogd.php");
}

?>
