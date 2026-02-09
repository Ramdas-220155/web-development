<?php
echo "<h2>File Write using fopen() and fwrite()</h2>";
$file = fopen("sample.txt", "w");

fwrite($file, "Hello Ram\n");
fwrite($file, "This is Task 2 File Functions Lab.\n");

fclose($file);

echo "File written successfully.<br><br>";

?>


<?php

echo "<h2>File Read using fread()</h2>";

$file = fopen("sample.txt", "r");

$content = fread($file, filesize("sample.txt"));

fclose($file);

echo nl2br($content);
echo "<br><br>";

?>



<?php

echo "<h2>Reading using file_get_contents()</h2>";

$content = file_get_contents("sample.txt");

echo nl2br($content);
echo "<br><br>";

?>


<?php

echo "<h2>Writing using file_put_contents()</h2>";

file_put_contents("sample2.txt", "This file is created using file_put_contents.\n");

//echo "sample2.txt created successfully.<br><br>";

?>



<?php

echo "<h2>File Information Functions</h2>";

$file = "sample.txt";

if(file_exists($file)){

    echo "File exists.<br><br>";

    echo "File Size: " . filesize($file) . " bytes<br>";
    echo "File Type: " . filetype($file) . "<br>";

    echo "Last Access Time: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
    echo "Last Modified Time: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
    echo "Creation Time: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";

    echo "Permissions: " . fileperms($file) . "<br>";
    echo "Owner ID: " . fileowner($file) . "<br>";
    echo "Group ID: " . filegroup($file) . "<br>";
    echo "Inode Number: " . fileinode($file) . "<br>";

} else {
    echo "File does not exist.";
}

echo "<br><br>";

?>



<?php

echo "<h2>File & Folder Management</h2>";

$folder = "test_folder";
$file = "sample.txt";
$copiedFile = "copy_sample.txt";
$renamedFile = "renamed_sample.txt";

if(!is_dir($folder)){
    mkdir($folder);
    echo "Folder created.<br>";
} else {
    echo "Folder already exists.<br>";
}

if(is_file($file)){
    copy($file, $copiedFile);
    echo "File copied successfully.<br>";
}

if(is_file($copiedFile)){
    rename($copiedFile, $renamedFile);
    echo "File renamed successfully.<br>";
}

if(is_file($renamedFile)){
    unlink($renamedFile);
    echo "Renamed file deleted successfully.<br>";
}

if(is_dir($folder)){
    rmdir($folder);
    echo "Folder deleted successfully.<br>";
}

echo "<br><br>";

?>



<?php

echo "<h2>Directory Handling</h2>";

echo "Current Working Directory: " . getcwd() . "<br><br>";

echo "<h3>Listing Files using scandir()</h3>";

$files = scandir(".");

foreach($files as $file){
    echo $file . "<br>";
}

echo "<br><h3>Listing Files using opendir() and readdir()</h3>";

$dir = opendir(".");

while(($file = readdir($dir)) !== false){
    echo $file . "<br>";
}

closedir($dir);

echo "<br><h3>Changing Directory Example</h3>";

if(is_dir(".")){
    chdir("test_folder");
    echo "Directory changed successfully.<br>";
}

echo "<br><br>";

?>


<?php

echo "<h2>File Locking using flock()</h2>";

$file = fopen("lock_test.txt", "w");

if(flock($file, LOCK_EX)){

    fwrite($file, "This file is locked while writing.\n");
    echo "File locked and written successfully.<br>";

    flock($file, LOCK_UN);
    echo "File unlocked successfully.<br>";

} else {
    echo "Could not lock the file.<br>";
}

fclose($file);

echo "<br><br>";

?>
