<html>
<body>

<!-- Takes you to the html page -->
    
<?php
    
    $email_signup = $_POST['signupemail'];
    $password_signup = $_POST['signuppassword'];
    
    header( 'Location: login-page.html' );
    
    $email = $_POST['loginemail'];
    $password = $_POST['loginpassword'];
    
    if ($email == $email_signup and $password == $password_signup)
    {
        header( 'Location: search-page.html' );
    }
    else
    {
        echo 'Wrong Username/Password';
    }

?>

</body>
</html>