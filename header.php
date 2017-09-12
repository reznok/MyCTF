<?php
    if (isset($_SESSION["login_user"]))
    {
        echo "Logged In As: " . $_SESSION["login_user"];
    }
?>
<br>
<br>
