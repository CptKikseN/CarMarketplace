<?php
    
    session_start();

    $email_signup = $_SESSION['signupemail'];
    $password_signup = $_SESSION['signuppassword'];
    
    header( 'Location: login-page.html' );

?>