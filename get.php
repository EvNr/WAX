<?php

$t  - $GET["text"];
$t  - $GET["sender"];

$f  = fopen("t.data","a");
fwrite($f,"$s : $t  \n ");
fclose($f);

?>