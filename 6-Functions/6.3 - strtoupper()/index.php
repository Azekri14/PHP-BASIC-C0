<!DOCTYPE html>
<html>
<body>

<?php

function mijnNaamIsGroot(){
   
$voornaam = "Mohamed";
$achternaam = "Azekri";
$geheleNaam = "Mijn naam is " . $voornaam . " " . $achternaam;
$geheleNaam = strtoupper($geheleNaam);
echo $geheleNaam;
}

echo mijnNaamIsGroot();
?>

</body>
</html> 
