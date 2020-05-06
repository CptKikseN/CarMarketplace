<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'userdata';

    $connect = mysqli_connect($server, $user, $pass) or die ("Fatal error");

    $selectdb = mysqli_select_db($connect, $db) or die("error 1");

?>