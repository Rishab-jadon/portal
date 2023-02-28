<?php
$showerror=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $role=$_POST['role'];
    $user_name=$_POST['name'];
    $user_dob=$_POST['date'];
    $user_email=$_POST['email'];
    $user_Mno=$_POST['mno'];
    $user_gender=$_POST['gender'];
    $pass=$_POST['password'];
    $cpass=$_POST['cpassword'];

    //check whether this email is already exists
    $existSql="select * from participants where participant_email='$user_email'";
    $result=mysqli_query($conn,$existSql);
    $numrows=mysqli_num_rows($result);
    if($numrows){
        $showerror="already exist user";
    }
    else{
        if($role=="participant"){
            
        if($pass==$cpass)
        {
         $hash=password_hash($pass,PASSWORD_DEFAULT);
         $sql="INSERT INTO `participants`(`participant_name`, `participant_dob`, `participant_email`, `participant_Mno`, `participant_gender`, `participant_pass`) VALUES ('$user_name','$user_dob','$user_email','$user_Mno','$user_gender','$hash')";
         $result=mysqli_query($conn,$sql);
         if($result){
            $showalert=true;
            header("Location: /portal/index.php?signupsuccess=true");
            exit();
         }
        }
        else{
            $showerror="password do not matched";
        }
    }
    if($role=="coordinator"){
            
        if($pass==$cpass)
        {
         $hash=password_hash($pass,PASSWORD_DEFAULT);
         $sql="INSERT INTO `cordinator`(`cordinator_name`, `cordinator_email`, `cordinator_dob`, `cordinator_gender`, `cordinator_mno`, `cordinator_password`) VALUES ('$user_name','$user_email','$user_dob','$user_gender','$user_Mno','$hash')";
         $result=mysqli_query($conn,$sql);
         if($result){
            $showalert=true;
            header("Location: /portal/index.php?signupsuccess=true");
            exit();
         }
        }
        else{
            $showerror="password do not matched";
        }
    }
    header("Location: /portal/index.php?signupsuccess=false&error=$showerror");
}
}
?>