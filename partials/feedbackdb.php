<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $feed=$_POST['feed'];
    
    //check whether this email is already exists
    //$conn=mysqli_connect('localhost','root','','workshop_portal');
    $Sql="INSERT INTO `feedback`(`f_name`, `l_name`, `mail`, `feed`) VALUES ('$fname','$lname','$email','$feed')";
    $result=mysqli_query($conn,$Sql);
         if($result){
            header("Location: /portal/dashboard.php");
            exit();
         }
}

?>