<html lang="en">
<body>
<form method="post">
    <label for="maxZahl">Maximale Zahl:</label>
    <input type="number" id="maxZahl" name="maxZahl" required><br><br>

    <label for="multiplikator">Multiplikator:</label>
    <input type="number" id="multiplikator" name="multiplikator" required><br><br>

    <input type="submit" name="submit" value="Berechnen">
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $maxZahl = intval($_POST['maxZahl']);
    $multiplikator = floatval($_POST['multiplikator']);

    echo "<h3>Logarithmische Funktion von 1 bis $maxZahl</h3>";

    for ($i = 1; $i <= $maxZahl; $i++) {
        $logValue = log10($i);
        $scaledValue = round($logValue * $multiplikator);
        echo str_pad($i, 3, " ", STR_PAD_LEFT) . ": " . str_repeat("·", $scaledValue) . "<br>";
    }
}
?>
