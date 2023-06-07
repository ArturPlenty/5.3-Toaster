<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toaster</title>
    <h1>Toaster</h1>
</head>
<body>

<form action="" method="post" autocomplete="off">

    <input type="submit" value="Schächte" name="schaechte">
    <input type="submit" value="Farbe" name="farbe"> <br>
    <small>Anzahl Toast:</small> <input type="text" name="anzahl">
    <small>Zeit in Sekunden:</small> <input type="text" name="zeit">
    <input type="submit" value="Hebel betätigen" name="hebel">
    <input type="submit" value="Toasten" name="toasten">
    <input type="submit" value="Zustand" name="zustand">

</form>

<?php
    error_reporting(E_ALL ^ E_WARNING);

    include_once('toaster.php');
    include_once('supertoaster.php');
    include_once('main.php');
?>
    
</body>
</html>