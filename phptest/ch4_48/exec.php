<?php
$result = exec("dir");
print mb_convert_encoding($result,"UTF-8","SJIS");
print_r($result);
?>