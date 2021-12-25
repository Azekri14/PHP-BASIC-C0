<!DOCTYPE html>
<html>
<body>


<?php

$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}else {
    echo "niet gelijk";
}

echo "<br></br>";

if($test1 != $test2) {
    echo "ongelijk";
}else {
    echo "gelijk";
}


echo "<br></br>";

if($test1 === $test2) {
    echo "identiek";
}else {
    echo "niet identiek";
}


echo "<br></br>";


if($test1 > $test2) {
    echo "test1 is groter dan test2";
}else {
    echo "niet groter";
}


echo "<br></br>";

if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
}else {
    echo "niet kleiner";
}


echo "<br></br>";

if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
}else {
    echo "niet groter of gelijk";
}

echo "<br></br>";

if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}else {
    echo "niet kleiner of gelijk";
}


?>
</body>
</html> 