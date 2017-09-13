<?php

include("header.php");

if (!isset($_SESSION["login_user"]))
{
    echo "You Must <a href='/login.php'>Login</a> To View This Page";
    exit();
}

if ($_SESSION["login_user"] == "pawl") {
    echo "Hello Pawl! Your Flag Is: ABCD{FLAG!}<br><br>";


    echo '
The <i>admin</i> user has implemented an online <a href="/filestorage.php">file storage</a> for everyone to use. Just login with your username and <a href="/pin.php">PIN</a>!
<br>
<br>
<h3>Account Info</h3><br>
Name: Pawl<br>
Birthday: 10/24/2014<br>
Favorite Food: Salmon<br>
';
}

if ($_SESSION["login_user"] == "admin") {
    echo "Hello Admin! Your Flag Is: ABCD{MD5_Is_Secure}<br><br>";


    echo '
The <i>admin</i> user has implemented an online <a href="/filestorage.php">file storage</a> for everyone to use. Just login with your username and <a href="/pin.php">PIN</a>!
<br>
<br>
<h3>Account Info</h3><br>
Name: Admin<br>
Birthday: 03/14/1965<br>
Favorite Food: Cheetos<br>
';
}

if ($_SESSION["login_user"] == "reznok") {
    echo "Hello Reznok! No flags here, but nice crack!<br><br>";


    echo '
The <i>admin</i> user has implemented an online <a href="/filestorage.php">file storage</a> for everyone to use. Just login with your username and <a href="/pin.php">PIN</a>!
<br>
<br>
<h3>Account Info</h3><br>
Name: Reznok<br>
Birthday: 01/10<br>
Favorite Food: Beer<br>
';
}


?>




