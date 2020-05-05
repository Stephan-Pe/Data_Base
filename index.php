<?php
session_start();
require_once 'includes/dbconn.php';
include 'includes/autoloader.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Mitgliedererfassung</title>
</head>
<body>
        <?php
            echo User\User::$userAge;
            User\User::setUserAge(21);
            echo User\User::$userAge;
        ?>
        <?php
            $user1 = new User\User("Stephan", "Petersen", 57, 1, "fellowjiister", "xxxxxxx");
            echo "<h4>";
            echo $user1->getName();
            echo "</h4>";
            echo $user1->getUserAge();
            $home1 = new Adress("Mainstreet", "Mainhattan", 6666);
            echo "<h4>";
            echo $home1->getZip();
            echo "</h4>";

        ?>
<h1>Hier Daten Eingeben</h1>
            <form class="input" action="input.php" method="POST">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="lastname" placeholder="Nachname">
                <input type="text" name="company" placeholder="Firma">
                <input type="text" name="adress" placeholder="Adresse">
                <input type="text" name="plz" placeholder="Postleitzahl">
                <input type="text" name="city" placeholder="Ort">
                <input type="text" name="phone" placeholder="Telefon">
                <input type="text" name="mobile" placeholder="Mobil">
                <input type="text" name="email" placeholder="E-Mail">
                <button type="submit" name="enter-submit">Enter</button>
            </form>
<div class="output">
    
    <h2>Mitglieder</h2>
    <?php
        
        $sql = "SELECT * FROM mitglieder;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if ($resultCheck > 0) {
            echo '<table id="display"><tr>
            <th>Name</th><th>Nachname</th><th>Adresse</th><th>Postleitzahl</th>
            <th>Ort</th><th>Telefon</th><th>Mobil</th><th>E-Mail</th></tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo"<tr><td>";
                echo $row['name'] ;
                echo " " . $row['lastname'] ."</td><td>";
                echo " " . $row['company'] ."</td><td>";
                echo " " . $row['adress'] ."</td><td>";
                echo " " . $row['plz'] ."</td><td>";
                echo " " . $row['city'] ."</td><td>";
                echo " " . $row['phone'] ."</td><td>";
                echo " " . $row['mobile'] ."</td><td>";
                echo " " . $row['email'] ."</td></tr>";   
            } 
            echo '</table>';
        }  
    ?>
</div>
</body>
</html>