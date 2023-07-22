<?php 

$CapitalCities = array("Lusaka", "Abujah", "Daresalam", "New York", "Benjin");

$ageByPerson = array("Tizenge"=>21, "Ephraim"=>24, "Niza"=>21, "Elijah"=>20);


foreach($CapitalCities as $city )
{

    echo $city."<br>";

}


foreach($ageByPerson as $key => $value )
{
   echo $key." : ". $value. "<br>";
}
