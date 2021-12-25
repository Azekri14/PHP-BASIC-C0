<!DOCTYPE html>
<html>
<body>

<?php

$test1 = 10;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
}

echo "<br></br>";

if($test1 != $test2) {
    echo "ongelijk";
}

echo "<br></br>";

if($test1 === $test2) {
    echo "identiek";
}

echo "<br></br>";


if($test1 > $test2) {
    echo "test1 is groter dan test2";
}

echo "<br></br>";

if($test1 < $test2) {
    echo "test1 is kleiner dan test2";
}

echo "<br></br>";

if($test1 >= $test2) {
    echo "test1 is groter of gelijk aan test2";
}



if($test1 <= $test2) {
    echo "test1 is kleiner of gelijk aan test2";
}

?>

</body>
</html> 