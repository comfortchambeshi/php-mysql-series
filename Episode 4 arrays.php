<?php 

//General form

$countries = array("Zambia", "Zimbabwe", "Uganda", "South Africa", "United Kingdom");
















//Second approach
$countries = ["Zambia", "Zimbabwe", "Uganda", "South Africa", "United Kingdom"];
/*
echo "Index 0 is: ". $countries[0]. "<br>";

//Access south Africa

echo "Index 3 is: " .$countries[3] . "<br>";

echo "The number of array elements are: ".count($countries);

*/




$countryCapitals = ["Zambia"=>"Lusaka", "Tanzania"=>"Daresalam", "USA"=>"New York", "Nigeria"=>"Abujah"];


echo "The capital city of Zambia is: ".$countryCapitals["Zambia"]. " <br> ";
echo "The capital city of The United States of America is: ". $countryCapitals["USA"]. "<br>";
echo "The capital city of Tanzania is: ". $countryCapitals["Tanzania"];










?>