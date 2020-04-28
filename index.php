<?php
$req_dump = print_r($_REQUEST, TRUE);
$fp = fopen('Output.txt', 'a');
fwrite($fp, $req_dump);
fclose($fp);
?>