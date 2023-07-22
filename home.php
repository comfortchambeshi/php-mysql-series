<?php 

if (isset($_POST["logoutBTN"])) {
    
   setcookie("user", "", time() - 3600);
   unset($_COOKIE["user"]);
}

?>

<?php 

if (!isset($_COOKIE["user"])) {

    echo "You are not logged in!";
    exit();
    
}else
{  
    echo "You have logged in as ".$_COOKIE['user']." <br>";

    echo '
    <form action="" method="POST">
    
    <br>
    <br>
    <button name="logoutBTN">Logout!</button>
    </form>';

}

?>


