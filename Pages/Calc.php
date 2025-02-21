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
        /**
         * Calculate Basal Metabolic Rate (BMR) and daily calorie needs based on user input.
         * 
         * This script uses the Harris-Benedict equation to calculate BMR and multiplies it
         * by an activity factor to estimate daily calorie needs for maintaining current weight.
         */

        // Check if all required POST variables are set
        if (isset($_POST['age']) && isset($_POST['gender']) && isset($_POST['weight']) && isset($_POST['height'])) {
            $age = $_POST['age']; // User's age
            $gender = $_POST['gender']; // User's gender
            $weight = $_POST['weight']; // User's weight in kilograms
            $height = $_POST['height']; // User's height in centimeters

            // Calculate BMR based on gender
            if ($gender == 'male') {
                $bmr = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age); // BMR formula for men
            } else {
                $bmr = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age); // BMR formula for women
            }

            $calories = $bmr * 1.2; // Calculate daily calorie needs (sedentary activity level)

            // Output the results
            echo "<p>Uw BMR is: $bmr</p>";
            echo "<p>Uw calorieën per dag zijn: $calories</p>";
        }
        ?>
    </main>
    <?php include("../Includes/Footer.php"); ?>
</body>
</html>