<?php 

$date = date("d:m:y");
$time = date("h:i:s:a");
/*echo "The time is ".$time."<br>";
echo "Today's date is ".$date."<br";
*/

//echo "Copyright 20".date('y'). " Witlevels Team. All rights reserved";




$d = strtotime("next sunday");
echo date("d", $d);



?>