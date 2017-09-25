<?php
/**
 * Created by PhpStorm.
 * User: bforbes
 * Date: 9/25/17
 * Time: 1:48 PM
 */

if (isset($_GET['file'])){
    $fp = fopen("zip:///var/www/MyCTF/uploads/tester.zip#tester", 'r');
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