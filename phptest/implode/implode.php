<?php

$array = array('lastname', 'email', 'phone');
echo "<pre>";
print_r($array);
echo "</pre><br />\n";


$comma_separated = implode(" / ", $array);

echo $comma_separated; // lastname,email,phone

?>