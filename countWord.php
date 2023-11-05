<?php
$openDataFile = file_get_contents("./data.txt");
$wordCountWord = str_word_count($openDataFile);
$lengthOfStr = strlen($openDataFile);

echo "Total word count of this file {$wordCountWord }". "\n";
echo "Total length of this file {$lengthOfStr}" ;