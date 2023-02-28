<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $name=$_POST['wname'];
    $date=$_POST['wdate'];
    $conn=mysqli_connect('localhost','root','','workshop_portal');
    $Sql="INSERT INTO `workshop`(`workshop_name`, `workshop_date`) VALUES ('$name','$date')";
    $result=mysqli_query($conn,$Sql);
         if($result){
            header("Location: /portal/admin/co_workshop.php");
            exit();
         }
}

?>