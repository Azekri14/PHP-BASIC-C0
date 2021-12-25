<!DOCTYPE html>
<html>
<body>

<?php

 $myMovies = array("Scarface", "Taken", "Saw");
 
 echo '<ul>';
 echo '<li>' . implode( '</li><li>', $myMovies) . '</li>';
 echo '</ul>';
?>

</body>
</html> 