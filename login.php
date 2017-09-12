<?php
    if (isset($_POST["username"]) and $_POST["username"] == "pawl"){
        echo "Hello Pawl!";
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
