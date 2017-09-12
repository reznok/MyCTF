<?php
    session_start();

    if (isset($_SESSION["login_user"]))
    {
        echo "Logged In As: " . $_SESSION["login_user"] . "\n";
        echo "<a href='\logout.php'>Logout</a>";
    }
?>
<br>
<br>
