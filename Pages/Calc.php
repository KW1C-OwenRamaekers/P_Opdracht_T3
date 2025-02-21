<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorieen Calculator</title>
    <link rel="stylesheet" href="../Styles/Calc.css">
</head>
<body>
    <?php include("../Includes/Navbar.php"); ?>
    <main>
        <h1>Calorieen Calculator</h1>
        <form action="Calc.php" method="post">
            <label for="age">Leeftijd:</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Geslacht:</label>
            <select id="gender" name="gender" required>
                <option value="male">Man</option>
                <option value="female">Vrouw</option>
            </select>

            <label for="weight">Gewicht:</label>
            <input type="number" id="weight" name="weight" required>

            <label for="height">Lengte in cm:</label>
            <input type="number" id="height" name="height" required>

            <input type="submit" value="Bereken">
        </form>

        <?php
        if (isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['weight']) && isset($_POST['height'])) {
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            if ($gender == 'male') {
                $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
            } else {
                $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
            }

            $calories = $bmr * 1.2;

            echo "<p>Uw BMR is: $bmr</p>";
            echo "<p>Uw calorieën per dag zijn: $calories</p>";
        }
        ?>
    </main>
    <?php include("../Includes/Footer.php"); ?>
</body>
</html>