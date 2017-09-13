<?php
include("header.php");

function check_password($user, $pass){
    if (!isset($_SESSION["login_user"]))
    {
        echo "You Must <a href='/login.php'>Login</a> To View This Page";
        exit();
    }

    if ($user == "YOUR_USERNAME" && $pass=="YOUR_PIN"){
        echo "Did you really think that would work? You need to change YOUR_USERNAME and YOUR_PIN!<br><br>";
    }
    if ($user == "pawl" && $pass == "1024") {
        echo "<h2>Pawl's Files</h2>";
        echo "<a href='/s3cret_fil3_flag.txt'>Flag</a><br>";
        echo "<a href='/pawl_admin_chat_history.txt'>Pawl and Admin Chat History</a>";
        exit();
    }

    if ($user == "admin" && $pass == "8256"){
        if ($_COOKIE["is_admin"] != "1") {
            echo "Hey! Stay out of my files! (That is unless you're going to give me a COOKIE...)";
            exit();
        }
        echo "<h2>Admin's Files</h2>";
        echo "<a href='/s3cret_fil3_flag_but_this_time_admin.txt'>Flag</a><br>";
        echo "<a href='/super_secure_password_storage.txt'>Password Database</a><br>";
        exit();

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
