<?php
/**
 * Created by IntelliJ IDEA.
 * User: BDoering
 * Date: 11.11.2015
 * Time: 08:04
 */

/*
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";*/


$text = getenv('HTTP_USER_AGENT');

$chrome = strpos($text, "Chrome");
$explorer = strpos($text, "Trident");
$firefox = strpos($text, "Firefox");

echo "Chrome: $chrome | Explorer: $explorer | Firefox: $firefox<br>";

if ($chrome !== false) {
    echo "Es wird der Browser Chrome genutzt";
}
if ($explorer !== false) {
    echo "Es wird der Browser Explorer genutzt";
}
if ($firefox !== false) {
    echo "Es wird der Browser Firefox genutzt";
}
if($chrome === false && $explorer === false && $firefox === false ){
    echo "Unbekannter Browser";
}


/// === Bedeutet strikte Datentyp Gleichheit!