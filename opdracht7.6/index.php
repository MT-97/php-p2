<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht6</title>
</head>
<body>
<form method="post" action="opdracht6.php">
    <label for="cijfer">Cijfer:</label>
    <input type="number" id="cijfer" name="cijfer" min="1" max="10" required>
    <input type="submit" value="Toevoegen">
</form>


<?php
session_start();

if(isset($_SESSION['cijfers'])) {
    $_SESSION['cijfers'] = array();
}

if(isset($_POST['cijfer'])) {
    $cijfer = $_POST['cijfer'];
    if($cijfer >= 1 && $cijfer <= 10) {
        array_push($_SESSION['cijfers'], $cijfer);
    }
}

$aantal_cijfers = count($_SESSION['cijfers']);
$som = array_sum($_SESSION['cijfers']);
$gemiddelde = ($aantal_cijfers > 0) ? round($som / $aantal_cijfers, 1) : 0;
?>

<p>Aantal ingevoerde cijfers: <?php echo $aantal_cijfers; ?></p>
<p>Gemiddelde: <?php echo $gemiddelde; ?></p>


</body>
</html>




