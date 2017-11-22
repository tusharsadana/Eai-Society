<?php
require 'includes/functions.php';
include_once 'config.php';

//Pull username, generate new ID and hash password
$newid = uniqid(rand(), false);
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];

    //Enables moderator verification (overrides user self-verification emails)
if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
//Validation rules

if ($pw1 != $pw2) {
 
    $message = "Password are not matching";
    echo "<script type='text/javascript'>alert('$message');</script>";  

} elseif (strlen($pw1) < 4) {


    $message = "Password is smaller than 4";
    echo "<script type='text/javascript'>alert('$message');</script>";

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    
    $message = "Enter a valid reason";
    echo "<script type='text/javascript'>alert('$message');</script>";
} 
else {
    //Validation passed
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {

        //Tries inserting into database and add response to variable

        $a = new NewUserForm;

        $response = $a->createUser($newuser, $newid, $newemail, $newpw);

        //Success
        if ($response == 'true') {

            
            $message = "Thank You for signing up";
            echo "<script type='text/javascript'>alert('$message');</script>";

            //Send verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');
            
            $message = "Verify Your Account on Your Email";
            echo "<script type='text/javascript'>alert('$message');</script>";


        } else {
            //Failure
            $message = "User Exists Please choose another";
            echo "<script type='text/javascript'>alert('$message');</script>";

        }
    } else {
        echo 'An error occurred on the form... try again Please go back';
    }
}; ?> 
<meta http-equiv="refresh" content="0.1;url=../about.php" />


