<?php 

//readfile method

//echo readfile("sample_file.txt");

?>


<?php 

//fopen and fread method

/*
$myFile = fopen("sample_file.txt", "r");

echo fread($myFile, filesize("sample_file.txt"));

fclose($myFile);

*/


?>




<?php 

$myFile = fopen("sample_file.txt", "a") or die("File does not exist!");

$txt = "I write code ";

fwrite($myFile, $txt);

$txtTwo = "I am powerful!";
fwrite($myFile, $txtTwo);



fclose($myFile);

?>