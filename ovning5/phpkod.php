<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tal1 = $_POST['tal1'];
    $tal2 = $_POST['tal2'];
    $operation = $_POST['operation'];


    if (is_numeric($tal1) && is_numeric($tal2)) {
        switch ($operation) {
            case 'add':
                $resultat = $tal1 + $tal2;
                echo "<div class='alert alert-success mt-3'>Resultat: $tal1 + $tal2 = $resultat</div>";
                break;
            case 'subtract':
                $resultat = $tal1 - $tal2;
                echo "<div class='alert alert-success mt-3'>Resultat: $tal1 - $tal2 = $resultat</div>";
                break;
            case 'multiply':
                $resultat = $tal1 * $tal2;
                echo "<div class='alert alert-success mt-3'>Resultat: $tal1 * $tal2 = $resultat</div>";
                break;
            case 'divide':
                if ($tal2 != 0) {
                    $resultat = $tal1 / $tal2;
                    echo "<div class='alert alert-success mt-3'>Resultat: $tal1 / $tal2 = " . round($resultat, 2) . "</div>";
                } else {
                    echo "<div class='alert alert-danger mt-3'>Fel: Division med noll är inte tillåten!</div>";
                }
                break;
            default:
                echo "<div class='alert alert-danger mt-3'>Ogiltig operation!</div>";
                break;
        }
    } else {
        echo "<div class='alert alert-danger mt-3'>Fel: Vänligen ange giltiga siffror!</div>";
    }
}
?>