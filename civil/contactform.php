<?php
$fname=$_POST['Firstname'];
$lname=$_POST['Lastname'];
$email=$_POST['email'];
$pno=$_POST['phonenumber'];
$address=$_POST['address'];
$message=$_POST['msg'];

$conn = $db= new mysqli('localhost','root','','contact-us');
if($conn->connect-error){
    die('Connection Failed',$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO `contact-us form`(`first name`, `last name`, `email`, `phone number`, `address`, `message`) VALUES (?,?,?,?,?,?)");
    $stmt->bind_param("sssiss",$fname,$lname,$email,$pno,$address,$message);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}

?>