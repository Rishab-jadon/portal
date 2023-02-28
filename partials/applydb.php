<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $name=$_POST['name'];
    $dob=$_POST['date'];
    $email=$_POST['email'];
    $mno=$_POST['mno'];
    $work=$_POST['work'];
    $gender=$_POST['gender'];
    //check whether this email is already exists
    $conn=mysqli_connect('localhost','root','','workshop_portal');
    $Sql="INSERT INTO `applied`(`applied_name`, `applied_dob`,`applied_email`, `applied_mno`,`applied_workshop`, `applied_gender`,date) VALUES ('$name','$dob','$email','$mno','$work','$gender','current_timestamp()')";
    $result=mysqli_query($conn,$Sql);
         if($result){
            header("Location: /portal/workshop.php");
            exit();
         }
}

?>