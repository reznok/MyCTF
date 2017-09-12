<?php
    session_start();



    if (isset($_SESSION["login_user"]))
    {
        echo "Logged In As: " . $_SESSION["login_user"] . "<br><br>";
        echo "<a href='/index.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='/logout.php'>Account</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='/logout.php'>Logout</a><br>";

    }
    else{
        echo "<a href='/index.php'>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<a href='/login.php'>Login</a><br>";
    }
?>

<br>
<br>
