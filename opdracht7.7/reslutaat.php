<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht7.7</title>
</head>
<body>
<h1>Resultaat</h1>
<p><?php echo $_SESSION['result']; ?></p>
<p><a href="opdracht7.php">Voer het script opnieuw uit</a></p>

<?php

session_start();

// Haal waarden op uit het formulier
$startingCapital = floatval($_POST['startingCapital']);
$annualInterestRate = floatval($_POST['annualInterestRate']) / 100;
$annualWithdrawal = floatval($_POST['annualWithdrawal']);

// Initialiseer variabelen
$jaar = 0;
$huidigKapitaal = $startingCapital;

// Voer de berekening uit
while ($huidigKapitaal > 0) {
    // Pas het jaarlijkse rentepercentage toe
    $huidigKapitaal *= (1 + $annualInterestRate);
    
    // Trek het jaarlijkse opnamebedrag af
    $huidigKapitaal -= $annualWithdrawal;
    
    // Verhoog het aantal jaren
    $jaar++;
    
    // Onderbreek de lus als het aantal jaren 100 overschrijdt
    if ($jaar > 100) {
        $jaar = 'je hele leven';
        break;
    }
}

// Sla het resultaat op in een sessievariabele
$_SESSION['resultaat'] = "Je kunt $jaar jaar lang € $annualWithdrawal per jaar opnemen.";

// Stuur door naar de resultaatpagina
header('Location: resultaat.php');
exit;

?>
    
</body>
</html>
