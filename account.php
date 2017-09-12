<?php

include("header.php");

if (!isset($_SESSION["login_user"]))
{
    echo "You Must <a href='/login.php'>Login</a> To View This Page";
    exit();
}

?>
You can't see me! 
