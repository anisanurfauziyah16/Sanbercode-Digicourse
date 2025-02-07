<?php
include_once("animal.php");
include_once("frog.php");
include_once("ape.php");
$sheep = new animal ("shaun");
        echo "name: " . $sheep->name . "<br>";
        echo "legs: " . $sheep->legs . "<br>";
        echo "clod blooded: " . $sheep->clod_blooded . "<br> <br>";

        $kodok = new frog ("buduk");
        echo "name: " . $kodok ->name . "<br>";
        echo "legs: " . $kodok->legs . "<br>";
        echo "clod blooded: " . $kodok->clod_blooded . "<br>";
        echo "jump : " . $kodok->jump() . "<br> <br>" ; // "hop hop"  
         
        $sungokong = new Ape("kera sakti");
        echo "name: " . $sungokong ->name . "<br>";
        echo "legs: " . $sungokong->legs() . "<br>"; // "2"
        echo "clod blooded: " . $sungokong->clod_blooded . "<br>";
        echo "Yell : " . $sungokong->Yell() . "<br>"; // "Auooo"  
         

?>