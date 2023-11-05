<?php
// full file data read
$readFile = file_get_contents("./data.txt");
echo $readFile;

// read only specific length
$openFile = fopen("./data.txt","r"); // here "r" mean that file only enable to read
$readData = fread($openFile, filesize("data.txt"));
echo $readData;