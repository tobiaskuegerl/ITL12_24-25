<html lang="en">
    <body>
        <form>
            <label for="zahl">Zahl</label>
            <input type="text" id="zahl" name="zahl" required><br>
            <input type="submit" name="submit" value="submit">

        </form>
    </body>
</html>

<?php
    if (isset($_REQUEST['submit'])) {
        echo "Test";
        $zahl = $_REQUEST['zahl'];
        for ($i = 1; $i <= $zahl; $i++) {
            $isPrimzahl = true;
            for ($div=2;$div<=$i/2; $div++) {
                if (($i % $div) == 0) {
                    $isPrimzahl = false;
                    break;
                }
            }
            if ($isPrimzahl) {
                echo "<br>". $i;
            }
        }
    }
?>
