<?php  
    require 'database.php';

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>

<div id="isMeerderJarig">
<?php 

    if($leeftijd > 18 ){
        echo "<h6>Je bent ouder dan 18!</h6>";
    }
?>
    </div>

</div>
    <div class="menu">
        <?php include 'menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="leeftijdChecker">
        <?php
            if($leeftijd < 16 ){
                echo "<h6>Je bent te jong om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>

