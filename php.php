<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table Generator</h2>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        echo "<h3>Multiplication Table for $number:</h3>";
        echo "<table>";
        for ($i = 1; $i <= 10; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>=</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>