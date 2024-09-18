<?php
function räknaArea($längd, $bredd) {
    if (is_numeric($längd) && is_numeric($bredd)) {
        $area = $längd * $bredd;
        return "Arean är " . round($area, 2);
    } else {
        return "Fel: Båda värdena måste vara siffror!";
    }
}

echo räknaArea(5, 10);  
echo räknaArea('abc', 10);  
?>