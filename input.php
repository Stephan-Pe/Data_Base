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

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $adress = $_POST['adress'];
    $plz = $_POST['plz'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    
    if (!$conn) {
        die("Connection failed: " .mysqli_connect_error());
    }

    $sql = "INSERT INTO mitglieder (name, lastname, company, adress, plz, city, phone, mobile, email) VALUES ('$name', '$lastname', '$company', '$adress', '$plz', '$city', '$phone', '$mobile', '$email')";
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

   
