<?php

$handle=fopen("poetry.txt","r");
while(!feof($handle)){
    $line=nl2br(fgets($handle));
    print($line);
}
fclose($handle);

?>