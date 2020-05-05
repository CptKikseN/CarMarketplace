<html>
<body>

<!-- Takes you to the html page -->

<?php

    include_once('sign-up.php');

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