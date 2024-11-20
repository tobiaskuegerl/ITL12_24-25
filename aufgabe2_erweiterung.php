<?php
echo "<h1> Tankrechner </h1>";

$liter = null;
$price = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["liter"]) && !empty($_POST["price"])) {
        $liter = $_POST["liter"];
        $price = $_POST["price"];
    } else {
        echo "<h3 style='color: red;'> Bitte füllen Sie alle Felder aus! </h3>";
    }
}

$cost = (double) $liter * (double) $price;
$result = "<br> Die Benzinkosten betragen für ". $liter ." Liter ". $cost. " €";
?>

<form method="post" action="">
    <label for="liter">Liter</label>
    <input type="text" id="liter" name="liter"><br>
    <label for="price">Preis/Liter</label>
    <input type="text" id="price" name="price"> <br>
    <input type="submit" value="Berechnen">

    <p><?php echo $result; ?></p>

</form>
