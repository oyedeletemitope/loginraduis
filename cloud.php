<?php
session_start();
require_once 'config.php';
      require_once 'connection.php';
use \LoginRadiusSDK\CustomerRegistration\Authentication\PhoneAuthenticationAPI;
use \LoginRadiusSDK\CustomerRegistration\Account\SottAPI;
$phoneAuthenticationAPI = new PhoneAuthenticationAPI(); 
$firstname= $_SESSION['firstname'];
$lastname= $_SESSION['lastname'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$phoneid=$_SESSION['phoneid'];

echo  $firstname;
echo $lastname;
echo $email;
echo $password;
echo $phoneid;

$payload = array(
    "firstName" => $firstname,
     "lastName" => $lastname,
     "password" => $password,
     "phoneId" => $phoneid,
     "Email" => array(array("Type" => "Primary", "Value" => $email))
);
    $sott ='I5ltNtcN4pVWaaSIv5CXVTQPhggpuegM693aMqS76vElwfzp7Cw45O6AZ8Wm4ciLkOCRmbelSJ1LUwv7hWPkko0GpTaPClPpOYpCmjN+ryM=*f58dac8136f31d67e9c1f1c5ff2de635'; //Required


$result = $phoneAuthenticationAPI->userRegistrationByPhone($payload,$sott);
if ($result){
    echo $result;
}
?>