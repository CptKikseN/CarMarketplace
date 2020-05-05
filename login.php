<?php

    session_start();
    echo $_SESSION['email_signup'];
    echo $_SESSION['password_signup'];

    $email = $_SESSION['loginemail'];
    $password = $_SESSION['loginpassword'];
    
    if ($email == $email_signup and $password == $password_signup)
    {
        header( 'Location: search-page.html' );
    }
    else
    {
        echo 'Wrong Username/Password';
    }
    
?>