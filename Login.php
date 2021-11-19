<?php
    session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Thomson Hotels log in</title>
            <link rel="StyleSheet" type="text/css" href="css/Login.css"/>
        </head>
        <body>
            <div class="header">
                <img src="img/thomsonlogo.png" alt="Thomson hotel" width="180" height="119">

            </div>
            <div id="container">
            <?php
					include('db.php');
					if(!empty($_POST['login'])){
						$gebruikersnaam = mysqli_real_escape_string($conn,$_POST['Gebruikersnaam']);
						$wachtwoord = mysqli_real_escape_string($conn,$_POST['Wachtwoord']);
						
						// echo "$gebruikersnaam $wachtwoord";
						
						// $wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);
						$sql = "SELECT * FROM medewerker WHERE gebruikersnaam = '$gebruikersnaam' LIMIT 1";
						// wachtwoord = '$wachtwoord' AND 
						// echo '<br>' . $query . '<br>';
						$result = mysqli_query($conn, $sql);
					   
						$nr_rows = mysqli_num_rows($result);
						// echo $nr_rows;
						
                        if($nr_rows == 1)
                        {
							$row = mysqli_fetch_assoc($result);
							// echo '<br>' . $row["wachtwoord"] . '<br>';
							if ($wachtwoord == $row["wachtwoord"]) {
								// echo 'Password is valid!';
								$_SESSION['gebruikersnaam'] = $row['gebruikersnaam'];
								echo '<script>window.location.href = "Ingelogd.php"</script>;';                           
							} else {
                                echo 'Invalid password.';
                                $message = "Wrong password or username";
                                echo "<script type='text/javascript'>alert('$message');</script>";
                                header("Refresh:0.1; url=Login.php");
							}
                        } 
                        else 
                        {
							//error
						}
					}
				?>
            <form action="" method="post">
                <h2>Log in</h2>
                <br>
                <h4>Gebruikersnaam</h4>
                <input type="text" id ="gebruikersnaam" name="Gebruikersnaam" placeholder="Gebruikersnaam">
                <h4>Wachtwoord</h4> 
                <input type="password" id="wachtwoord" name="Wachtwoord" placeholder="Wachtwoord">
                <br>
                <br>
                <br>
                <input style="float:left" type="submit" id="Knop" value="Log in" name="login">
                <input style="float:right" type="button" id="Knop1" value="Register" name="Register" onclick="window.location.href='Register_form.php';">
            </form>     
            </div>
        </body>






















    </html>