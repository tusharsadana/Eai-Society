<?php
 
require 'connection.php';
$conn    = Connect();

$type    = $conn->real_escape_string($_POST['type']);
$fname    = $conn->real_escape_string($_POST['f_name']);
$mname    = $conn->real_escape_string($_POST['m_name']);
$lname    = $conn->real_escape_string($_POST['l_name']);


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

if (empty($fname)  || empty($email)  || empty($country) || empty($phone)){
    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Complete All Fields.</div><div id="returnVal" style="display:none;">false</div>';
    
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
    
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Must provide a valid email address</div><div id="returnVal" style="display:none;">false</div>';
    
 } else {
   
    
            $query = "INSERT INTO `form`( `type`, `f_name`, `m_name`, `l_name`, `dob`, `gender`, `job`, `aff`, `street`, `city`, `state`, `postal`, `country`, `phone`, `fax`, `email`, `interest`, `other`) VALUES ('" . $type . "','" . $fname . "','" . $mname . "','" . $lname . "','" . $dob . "','" . $gen . "','" . $job . "','" . $aff . "','" . $street . "','" . $city . "','" . $state . "','" . $postal . "','" . $country . "','" . $phone . "','" . $fax . "','" . $email . "','" . $q1 . "','" . $other . "')";
            $success = $conn->query($query);
        
            echo 'Thank You For Registering.            Redirecting...';
}


 
$conn->close();
 
?>
<meta http-equiv="refresh" content="2; url=index.php" />