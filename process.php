
<?php 
$ladoA = preg_replace("/[^0-9.]/", '', $_POST["ladoA"]);; 
$ladoB = preg_replace("/[^0-9.]/", '', $_POST["ladoB"]);; 
echo hypot($ladoA, $ladoB);
?>