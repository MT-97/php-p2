<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>opdracht7</title>
</head>
<body>
<form method="post">
    <p>Bedrag exclusief BTW
        <input type="text" name="bedrag" value=""></p>
        <input type="radio" name="BTW" value="negen">laag, 9%
        <input type="radio" name="BTW" value="eenentwintig">hoog, 21%
        <p><input type="submit" name="omzetten" value="omzetten"></p>
            
    </form> 

<?php
    // auteur : Mashtaq Thabit

    // is de knop omgezet?
    if (isset($_POST['omzetten'])) {
     
      // valideren bedrag
      if (strlen($_POST['bedrag']) == 0) {
         echo "Error: bedrag is niet ingevuld<br>";
      } elseif (filter_var($_POST['bedrag'], FILTER_VALIDATE_FLOAT) == false) {
        echo "Error: bedrag " . $_POST['bedrag'] . " is niet ok<br>";
      } else {
        // getal is ok
        $bedrag = $_POST['bedrag'];

        // BEREKEN BEDRAG INCLUSIEF BTW
        if ($_POST['BTW'] == 'negen') {
            $bedragIncBtw = $bedrag * 1.09;
        } else {
            $bedragIncBtw = $bedrag * 1.21;
        }
        echo "Het ingevulde bedrag inclusief BTW is: " . $bedragIncBtw . "<br>"; 
      }
    }
   
?>


  
</body>
</html>