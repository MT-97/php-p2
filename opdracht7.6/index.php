<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht6</title>
</head>
<body>
<form method="post">
    <label for="inputNumber">Cijfer</label>
    <input type="text" name="inputNumber" id="inputNumber" placeholder=""><br>
    <br> <button type="submit" name="submit">Toevoegen</button>
</form


<?php
    // Sessievariabele voor het opslaan van de reeks cijfers
         session_start();
          if (!isset($_SESSION['cijferReeks'])) {
           $_SESSION['cijferReeks'] = [];
}
 
          if (isset($_POST['submit'])) {
    // Haalt het ingevoerde cijfer op uit het formulier
    $inputNumber = $_POST['inputNumber'];
    
    // Controleer of het ingevoerde waarde een geldig getal is
          if (is_numeric($inputNumber)) {
        // Voeg het cijfer toe aan de reeks
        $_SESSION['cijferReeks'][] = (float)$inputNumber;
 
        // weergave van het aantal cijfers
        echo "Aantal ingevoerde cijfers: " . count($_SESSION['cijferReeks']) . "<br>";
 
        // Berekent het gemiddelde
        $gemiddelde = count($_SESSION['cijferReeks']) > 0 ?
            array_sum($_SESSION['cijferReeks']) / count($_SESSION['cijferReeks']) :
            0;
 
        // Rondt het gemiddelde af op 1 decimaal
        $gemiddelde = number_format($gemiddelde, 1);
 
        // Laat het gemiddelde zien
        echo "Gemiddelde: " . $gemiddelde;
    }

}
    ?>

</body>
</html>




