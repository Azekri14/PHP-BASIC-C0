<!DOCTYPE html>
<html>
<body>

<?php

$var1 = 10;
$var2 = 12;

if($var1 < 20 && $var1 > 5) {
    echo "het getal zit tussen de 20 en de 5!";
} else {
    echo "het getal is groter dan 20 of kleiner dan 5!";
}
echo "<br></br>";


if($var1 < 20 || $var1 > 5) {
    echo "het getal zit tussen de 20 en de 5!";
} else {
    echo "het getal is groter dan 20 of kleiner dan 5!";
}
echo "<br></br>";


if($var1 < 20 xor $var1 > 5) {
    echo "het getal zit tussen de 20 en de 5!";
} else {
    echo "het getal is groter dan 20 of kleiner dan 5!";
}
echo "<br></br>";


if($var1 < 20 != $var1 > 5) {
    echo "het getal zit tussen de 20 en de 5!";
} else {
    echo "het getal is groter dan 20 of kleiner dan 5!";
}

?>
</body>
</html> 