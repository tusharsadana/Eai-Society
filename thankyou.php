<?php
 
require 'connection.php';
$conn    = Connect();

$type    = $conn->real_escape_string($_POST['type']);
$fname    = $conn->real_escape_string($_POST['f_name']);
$mname    = $conn->real_escape_string($_POST['m_name']);
$lname    = $conn->real_escape_string($_POST['l_name']);
$user = $conn->real_escape_string($_POST['username']);
$pass = $conn->real_escape_string($_POST['password']);
$pass1 = $conn->real_escape_string($_POST['password1']);

$dob = $conn->real_escape_string($_POST['dob']);
$gen = $conn->real_escape_string($_POST['gender']);
$job = $conn->real_escape_string($_POST['job']);
$aff = $conn->real_escape_string($_POST['aff']);
$street = $conn->real_escape_string($_POST['street']);
$city = $conn->real_escape_string($_POST['city']);
$state = $conn->real_escape_string($_POST['state']);
$postal = $conn->real_escape_string($_POST['postal']);
$country = $conn->real_escape_string($_POST['country']);

$phone = $conn->real_escape_string($_POST['phone']);
$fax = $conn->real_escape_string($_POST['fax']);
$email = $conn->real_escape_string($_POST['email']);
$q1=$conn->real_escape_string($_POST['interest']);
$other = $conn->real_escape_string($_POST['other']);
$flag=1;
if (empty($fname) || empty($user) || empty($email) || empty($pass) || empty($pass1) || empty($country) || empty($phone)){
    $error = "Complete all fields";
    $flag = 0;
}

if ($pass != $pass1){
    $error = "Passwords do not match";
    $flag = 0;
    
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error = "Enter a Valid email";
    $flag = 0;
}

if (strlen($pass) <= 6){
    $error = "Choose a password longer then 6 character";
    $flag = 0;
}
if($flag){
    //no error
    $sthandler = "SELECT count(*) FROM `form` WHERE username = '".$user."'";
    echo $sthandler;
   
    

        if($sthandler > 0){
            echo "<script type='text/javascript'>alert('Username Already Taken');</script>";
        } 
        else {
            $query   = "INSERT INTO `form`(`f_name`, `m_name`, `l_name`, `username`, `password`, `password1`, `dob`, `gender`, `job`, `aff`, `street`, `city`, `state`, `postal`, `country`, `q1`, `other`, `phone`, `fax`, `email`, `type`) VALUES ('" . $fname . "','" . $mname . "','" . $lname . "','" . $user . "','" . $pass . "', '" . $pass1 . "', '" . $dob . "','" . $gen . "','" . $job . "','" . $aff . "','" . $street . "','" . $city . "','" . $state . "','" . $postal . "','" . $country . "','" . $q1 . "','" . $other . "','" . $phone . "','" . $fax . "','" . $email . "','" . $type . "')";
            
            $success = $conn->query($query);
        }
        echo "<script type='text/javascript'>alert('Success');</script>"; 
    }
else {
    echo "<script type='text/javascript'>alert('$error');</script>";
    header("Location: about.html");
}
// else{
//     echo "<script type='text/javascript'>alert('Success');</script>";
    
// }
 
header("Location: index.html");
 
$conn->close();
 
?>