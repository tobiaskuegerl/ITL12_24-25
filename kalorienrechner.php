<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['geschlecht'];
    $age = $_POST['alter'];
    $weight = $_POST['gewicht'];
    $height = $_POST['groesse'];
    $sitting = $_POST['sitzend'];
    $office = $_POST['buero'];
    $standing = $_POST['stehend'];

    if ($gender == 'weiblich') {
        $basalMetabolicRate = 655.1 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
    } else {
        $basalMetabolicRate = 66.47 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
    }

    $totalHours = $sitting + $office + $standing;
    $pal = (($sitting * 1.2) + ($office * 1.45) + ($standing * 1.85) + (12 * 0.95)) / 24;

    $dailyCaloricNeed = $basalMetabolicRate * $pal;

    $caloriesToLoseWeight = $dailyCaloricNeed - 400;
    $caloriesToGainWeight = $dailyCaloricNeed + 400;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalorienbedarf Rechner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Kalorienbedarf Rechner</h2>

    <form method="post" class="mt-4">
        <div class="mb-3">
            <label for="geschlecht" class="form-label">Geschlecht</label>
            <select class="form-select" id="geschlecht" name="geschlecht" required>
                <option value="weiblich">Weiblich</option>
                <option value="maennlich">Männlich</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="alter" class="form-label">Alter (Jahre)</label>
            <input type="number" class="form-control" id="alter" name="alter" required>
        </div>

        <div class="mb-3">
            <label for="gewicht" class="form-label">Gewicht (kg)</label>
            <input type="number" class="form-control" id="gewicht" name="gewicht" required>
        </div>

        <div class="mb-3">
            <label for="groesse" class="form-label">Größe (cm)</label>
            <input type="number" class="form-control" id="groesse" name="groesse" required>
        </div>

        <div class="mb-3">
            <label for="sitzend" class="form-label">Sitzend (Stunden)</label>
            <input type="number" class="form-control" id="sitzend" name="sitzend" required>
        </div>

        <div class="mb-3">
            <label for="buero" class="form-label">Büro (Stunden)</label>
            <input type="number" class="form-control" id="buero" name="buero" required>
        </div>

        <div class="mb-3">
            <label for="stehend" class="form-label">Stehend/Gehend (Stunden)</label>
            <input type="number" class="form-control" id="stehend" name="stehend" required>
        </div>

        <button type="submit" class="btn btn-primary">Berechnen</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="mt-4">
            <h3>Ergebnis:</h3>
            <p>Grundumsatz: <?php echo round($basalMetabolicRate, 2); ?> kcal</p>
            <p>Durchschnittlicher PAL-Faktor: <?php echo round($pal, 2); ?></p>
            <p><strong>Kalorienbedarf zum Gewicht halten: <?php echo round($dailyCaloricNeed, 2); ?> kcal</strong></p>
            <p>Kalorien für Abnahme (400 kcal weniger): <?php echo round($caloriesToLoseWeight, 2); ?> kcal</p>
            <p>Kalorien für Zunahme (400 kcal mehr): <?php echo round($caloriesToGainWeight, 2); ?> kcal</p>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
