<!-- Connection to server and database -->
<?php
    
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'userdata';

    $connect = mysqli_connect($server, $user, $pass) or die ("Connection Failed!");

    $selectdb = mysqli_select_db($connect, $db) or die("Database Retrieve Fail");

?>