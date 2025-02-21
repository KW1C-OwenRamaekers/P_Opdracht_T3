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

        // Check if all required POST variables are set
        if (isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['weight']) && isset($_POST['height'])) {
            $age = $_POST['age']; // User's age
            $gender = $_POST['gender']; // User's gender
            $weight = $_POST['weight']; // User's weight in kilograms
            $height = $_POST['height']; // User's height in centimeters

            // Calculate BMR based on gender
            if ($gender == 'male') {
                $bmr = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age); // BMR formula for men
            } else {
                $bmr = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age); // BMR formula for women
            }

            $calories = $bmr * 1.2; // Calculate daily calorie needs (sedentary activity level)

            // Output the results
            echo "<p>Uw BMR is: $bmr</p>";
            echo "<p>U kunt per dag $calories calorieën innemen om uw huidig gewicht te behouden.</p>";
        }
        ?>
    </main>
    <?php include("../Includes/Footer.php"); ?>
</body>
</html>