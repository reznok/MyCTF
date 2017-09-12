<?php

include("header.php");

if (!isset($_SESSION["login_user"]))
{
    echo "You Must <a href='/login.php'>Login</a> To View This Page";
    exit();
}

if ($_SESSION["login_user"] == "pawl"){
    echo "Hello Pawl! Your Flag Is: ABCD{FLAG!}";
}

?>

The <i>admin</i> user has implemented an online <a href="/filestorage.php">file storage</a> for everyone to use. Just login with your username and <a href="/pin.html">PIN</a>!



