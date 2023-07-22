<html>
    <title>Registration form</title>
    <body>
        <form method="POST" action="">
            <br>
            <input type="text"  placeholder="Full name" name="full_name">
            <br>
            <input type="text"  placeholder="Email" name="email">
            <br>
            <input type="password"  placeholder="Password" name="password">
            <br>
            <button type="submit" name="register_btn">Register</button>
</form>
</body>
</html>


<?php 
/*
if (isset($_GET["full_name"]) and isset($_GET['email']) and isset($_GET['password'])) {
    echo "The full name is ". $_GET["full_name"]. "<br>";
    echo "Email ". $_GET["email"]. "<br>";
    echo "Password ". $_GET["password"]. "<br>";
}*/

?>





<?php 

if(isset($_POST['register_btn']))
{

    echo "The full name is ". $_POST["full_name"]. "<br>";
    echo "Email ". $_POST["email"]. "<br>";
    echo "Password ". $_POST["password"]. "<br>";
    
}

?>


