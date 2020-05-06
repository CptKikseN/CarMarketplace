<?php

    include 'config.php';

    if(isset($_POST["loginbtn"])){
        $email = $_POST['loginemail'];
        $password = $_POST['loginpassword'];
        $getdata = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
        $dataarray = mysqli_fetch_array($getdata);
        if($dataarray["email"] == $email &&  $dataarray["password"] == $password)
        {
            header( 'Location: search-page.html' );
        }else
        {
            header( 'Location: login-page.html' );
        }
    }

?>