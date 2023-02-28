<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $name=$_POST['sname'];
    $email=$_POST['email'];
    $num=$_POST['no'];
    $conn=mysqli_connect('localhost','root','','workshop_portal');
    $Sql="INSERT INTO `attendance`(`name`, `email`,`attendance`) VALUES ('$name','$email','$num')";
    $result=mysqli_query($conn,$Sql);
         if($result){
            header("Location: /portal/admin/co_dashboard.php");
            exit();
         }
}

?>