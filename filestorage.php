<?php
include("header.php");

function check_password($user, $pass){
    if ($user == "YOUR_USERNAME" && $pass=="YOUR_PIN"){
        echo "Did you really think that would work? You need to change them!<br><br>";
    }
    if ($user == "pawl" && $pass == "5555") {
        echo "Here's Your Files!";
        return true;
    }
    return false;
}

if (isset($_GET["username"])){
    if (isset($_GET["pin"])) {
        if(!check_password($_GET["username"], $_GET["pin"]))
        {
            echo "<span style='color: red;'>Invalid Username / PIN</span><br><br>";
        }
    }
    else{
        echo "Please Enter A PIN";
    }
}
?>

<html>
Please enter your Username and PIN.<br>
<br>
<form action="" method="GET">
    Username: <input type="text" size="40" name="username"><br>
    PIN:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" name="pin"> <br>
    <input type="submit" value="Submit">
</form>
<br>
<br>

Alternatively, you can login by going to:<br>
http://localhost/filestorage.php?username=YOUR_USERNAME&pin=YOUR_PIN<br>
<br>
Just replace YOUR_USERNAME with your username, and YOUR_PIN with your pin!



<!-- They'll never guess that my password is 1337hax0rz -->
