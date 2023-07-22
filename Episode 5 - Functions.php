<?php 


function TizengeBalance()
{

    //Group statements go here!

    echo "Tizenge's account balance is: K10,500 ZMW";

}

//Best institution to learn tech and engineering from 

function bestInstition()
{
    //Code

    echo "What is the best tech instituition in Zambia:  Zambia University College of Technology";
}


//Call Tizenge's balance function
/*
echo TizengeBalance(). "<br>";

//Call the other function

echo bestInstition();

*/

//Parameter based functions
function userBalance($name,$balance)
{
 //Code goes here!!!
 
 echo "Todays ". $name." 's balance is: ".$balance. "<br>";
}

//Call userBalance

$ephraimBalance = userBalance("Ephraim", "K2,300");

$ElijahBalance = userBalance("Elijah", "K1.50");

$nizaBalance = userBalance("Niza", "K-20.0");
