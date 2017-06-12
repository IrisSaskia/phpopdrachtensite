<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 12-6-2017
 * Time: 10:39
 */

if (isset($_GET["aantal"])) {
    $aantallagen = $_GET["aantal"] + 1;
    if ($aantallagen < 17) {
        for ($i = 0; $i < $aantallagen; $i++) {
            echo "<p>";
            for ($j = 0; $j < $i; $j++) {
                echo " * ";
            }
            echo "</p>";
        }
    } else {
        echo "Je hebt een groter getal dan vijftien ingevoerd, dit is niet toegestaan, probeer een ander getal!";
    }
} else {
    for ($i = 0; $i < 9; $i++) {
        echo "<p>";
        for ($j = 0; $j < $i; $j++) {
            echo " * ";
        }
        echo "</p>";
    }
}