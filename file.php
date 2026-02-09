<?php
$file = fopen("hello.txt","r");
if($file){
    $content = fread($file,filesize("hello.txt"));
    echo $content;
    fclose($file);
}else{
    echo "unable to open file";
}
?>