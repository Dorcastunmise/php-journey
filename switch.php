<?php
    $grade ="F";

    switch($grade) {
        case "A":
            echo "Excellent!";
            break;
        case "B":
            echo "Good!";
            break;
        case "C":
            echo "Average!";
            break;
        case "D":
            echo "Poor!";
            break;
        case "E":
            echo "Pass";
            break;
        case "F":
            echo "Fail";
            break;
        default:
            echo "{$grade} is invalid";
    }
?>