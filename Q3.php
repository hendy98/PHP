<?php
// Define your brother's age
$age = 10;

// Use a switch statement to print the appropriate message
switch (true) {
    case ($age < 5):
        echo "Stay at home";
        break;
    case ($age == 5):
        echo "Go to Kindergarten";
        break;
    case ($age >= 6 && $age <= 12):
        // Loop through grades 1 to 7 for ages 6 to 12
        for ($i = 6; $i <= 12; $i++) {
            if ($age == $i) {
                echo "Go to grade: " . ($i - 5);
                break;
            }
        }
        break;
    default:
        echo "Age not within the specified range";
        break;
}
?>
