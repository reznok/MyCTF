<?php
    function check_password($user, $pass){
        if ($user == "pawl" && $pass == "1337hax0rz")
            return true;
        return false;
    }

    if (isset($_POST["username"])){
        if (isset($_POST["password"])) {
            if(check_password($_POST["username"], $_POST["password"]))
            {
                echo "You Are Now Logged In As: " . $_POST["username"];
            }
        }
        else{
            echo "Please Enter A Password";
        }
    }
?>

<html>
<form action="#" method="POST">
    Username: <input type="text" size="40" name="username"><br>
    Password: <input type="password" size="40" name="password"> <br>
    <input type="submit" value="Submit">
</form>

<!-- They'll never guess that my password is 1337hax0rz -->

</html>
