<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Mitglieder</title>
</head>
<body>
    <?php
        

    if (isset($_POST['enter-submit'])){   
        
    require 'dbconn.php';

    $vorname = $_POST['vorname'];
    $surname = $_POST['surname'];
    $company = $_POST['company'];
    $adress = $_POST['adress'];
    $plz = $_POST['plz'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $mobil = $_POST['mobil'];
    $email = $_POST['email'];
    
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO mitglieder (vorname, surname, company, adress, plz, city, phone, mobil, email) VALUES ('$vorname', '$surname', '$company', '$adress', '$plz', '$city', '$phone', '$mobil', '$email')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?record=success");
        exit();
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    }


?>
</body>
</html>    

   
