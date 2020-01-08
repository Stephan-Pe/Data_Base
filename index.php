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

<h1>Hier Daten Eingeben</h1>
            <form class="input" action="input.php" method="POST">
                <input type="text" name="vorname" placeholder="Name">
                <input type="text" name="surname" placeholder="Nachname">
                <input type="text" name="company" placeholder="Firma">
                <input type="text" name="adress" placeholder="Adresse">
                <input type="text" name="plz" placeholder="Postleitzahl">
                <input type="text" name="city" placeholder="Ort">
                <input type="text" name="phone" placeholder="Telefon">
                <input type="text" name="mobil" placeholder="Mobil">
                <input type="text" name="email" placeholder="E-Mail">
                <button type="submit" name="enter-submit">Enter</button>
            </form>
</body>
</html>