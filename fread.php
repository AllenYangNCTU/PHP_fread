<?php
$filename="poetry.txt";
$handle=fopen($filename,"r");
if($handle){
    $content=nl2br(fread($handle,filesize($filename)));
    fclose($handle);
    print($content);
}
else{
    print("Fail to open!");
}
?>