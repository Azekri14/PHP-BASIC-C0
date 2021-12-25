<!DOCTYPE html>
<html>
<body>

<?php

function geefTienProcent(){
   
$koopPrijs = 75;
$korting = 10;

$hoeveelheidKorting = $koopPrijs * $korting / 100;
    return $koopPrijs - $hoeveelheidKorting ;
}  

echo geefTienProcent();
?>

</body>
</html> 
