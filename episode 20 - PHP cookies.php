<form action="" method="POST">
<input  placeholder="Enter your name" type="text" name="full_name">
<br>
<br>
<button name="loginBTN">Login</button>
</form>


<?php 

if (isset($_POST["loginBTN"])) {

    $cookie_name = "user";
    $cookie_value = $_POST["full_name"];

   if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"))
   {
    header("LOCATION: home.php");

   }else
   {
    echo "Your cookie was not set";
   }
    
   
}

?>