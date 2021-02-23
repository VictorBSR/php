<?php
ini_set('display_errors', '1');

$dt = new DateTime(); //classe DateTime
$periodo = new DateInterval("P15D");

echo $dt->format('d/m/Y H:i:s');
echo '<br>';

$dt->add($periodo);
echo $dt->format('d/m/Y H:i:s');


?>