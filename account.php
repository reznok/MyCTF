<?php

include("header.php");

if (!isset($_SESSION["login_user"]))
{
    echo "You Must <a href='/login.php'>Login</a> To View This Page";
    exit();
}

if ($_SESSION["login_user"] == "pawl"){
    echo "Hello Pawl! Your Flag Is: ABCD{FLAG!}<br><br>";
}

?>

The <i>admin</i> user has implemented an online <a href="/filestorage.php">file storage</a> for everyone to use. Just login with your username and <a href="/pin.php">PIN</a>!
<br>
<br>
<h3>Account Info</h3><br>
Name: Pawl<br>
Birthday: 10/24/2014<br>
Favorite Food: Salmon<br>




