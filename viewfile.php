<?php
/**
 * Created by PhpStorm.
 * User: bforbes
 * Date: 9/25/17
 * Time: 1:48 PM
 */

if (isset($_GET['file'])){
    $dir = dirname(__DIR__) . "/MyCTF/";

    readfile($_GET['file']);
}
else{
    echo "Error";
    exit();
}