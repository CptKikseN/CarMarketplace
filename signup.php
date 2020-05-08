<!-- Sign-up handler which allows the user to register via e-mail and password in the database -->
<?php
    
    include 'config.php';

    if(isset($_POST["signupbtn"])){
        $email = $_POST["signupemail"];
        $password = $_POST["signuppassword"];
        $insertdata = mysqli_query($connect, "INSERT INTO `user` (`email`, `password`) VALUES ('$email', '$password')");
        header( 'Location: login-page.html' );
    }

?>