<!DOCTYPE html>
<html>
<body>

<?php

$prod_besteld = 20;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}

echo $prijs;
echo "<br></br>";

$prod_besteld = 5;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}


echo $prijs;
echo "<br></br>";

$prod_besteld = 17;

if($prod_besteld < 10) {
    $prijs = 1.50;
} elseif($prod_besteld < 20) {
    $prijs = 1.25;
} else {
    $prijs = 1.00;
}


echo $prijs;
echo "<br></br>";
?>

</body>
</html> 