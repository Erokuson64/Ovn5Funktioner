<?php
function räknaMedeltal($tal) {
    $talArray = explode(",", $tal);
    
    foreach ($talArray as $värde) {
        if (!is_numeric($värde)) {
            return "Fel: Alla värden måste vara siffror!";
        }
    }
    
    $summa = array_sum($talArray);
    $antal = count($talArray);
    $medeltal = $summa / $antal;
    
    return "<p>Medeltalet är " . round($medeltal, 2) . "</p>";
}

echo räknaMedeltal("3, 24, 80, 9, 1");  
?>