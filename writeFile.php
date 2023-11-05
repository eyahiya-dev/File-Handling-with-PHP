<?php
$openFile = fopen("./output.txt","w");
$readPreviousData = file_get_contents("./data.txt");
$processData = strtoupper($readPreviousData);
$writeFile = fwrite($openFile, $processData);

// check 
echo file_get_contents("./output.txt");