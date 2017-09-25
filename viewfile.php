<?php
/**
 * Created by PhpStorm.
 * User: bforbes
 * Date: 9/25/17
 * Time: 1:48 PM
 */

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

if (isset($_GET['file'])){
    $fp = fopen("zip:///var/www/MyCTF/uploads/tester.zip#readme.txt", 'rb');
    if( $fp ){
        while( !feof($fp) ){
            echo fread($fp, 8192);
        }
        fclose($fp);
    }
}
else{
    echo "Error";
    exit();
}