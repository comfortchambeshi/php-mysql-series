<?php 
//Preg match
/*
$word = "Welcome to PHP lessons!";

$pattern = "/PHP/i";

echo preg_match($pattern, $word);*/








?>


<?php 


//Preg_match_all()
/*
$string = "The rain in spain falls mainly on the plains";
$pattern = "/ain/i";

echo preg_match_all($pattern, $string);

*/

?>




<?php 
//preg_replace()
$word = "I am learning from w3schools!";
$pattern = "/W3schools/i";

$final_word =  preg_replace($pattern, "Witlevels", $word);

echo $final_word;



?>