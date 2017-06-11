<?php
/**
* Created by PhpStorm.
* User: Iris
* Date: 11-6-2017
* Time: 20:27
*/

$prijs = 10;
$uiteindelijkeprijs = 10;

if(isset($_GET["leeftijd"])) {
    $leeftijd = $_GET["leeftijd"];
    if ($leeftijd > 65 || 2 < $leeftijd && $leeftijd <= 12) {
        $uiteindelijkeprijs = $prijs * 0.5;
    } else if ($leeftijd < 3) {
        $uiteindelijkeprijs = 0;
    } else {
        $uiteindelijkeprijs = $prijs;
    }

    echo "De ingevoerde leeftijd is: " . $leeftijd . ".";
    echo "<br />";
    echo "De uiteindelijke prijs is: " . $uiteindelijkeprijs . ".";
} else {
    echo "U heeft nog geen leeftijd ingevoerd.";
}

