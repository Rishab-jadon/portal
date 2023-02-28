<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $role=$_POST['role'];
    $email=$_POST['username'];
    $pass=$_POST['password'];
   
    //check whether this email is already exists
    if($role=="participant"){

    $Sql="select * from participants where participant_email='$email'";
    $result=mysqli_query($conn,$Sql);
    $numrows=mysqli_num_rows($result);
    if($numrows){
     $row=mysqli_fetch_assoc($result);
       if(password_verify($pass,$row['participant_pass'])){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['useremail']=$email;
        echo "logged in".$email;
        header("Location: /portal/dashboard.php");
       }
       else {
        echo "Incorrect password";
    }
}
echo "<h2>Please enter the correct username</h2>";
}

if($role=="coordinator"){

    $Sql="select * from cordinator where cordinator_email='$email'";
    $result=mysqli_query($conn,$Sql);
    $numrows=mysqli_num_rows($result);
    if($numrows){
     $row=mysqli_fetch_assoc($result);
       if(password_verify($pass,$row['cordinator_password'])){
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['useremail']=$email;
        echo "logged in".$email;
        header("Location: /portal/admin/co_dashboard.php");
       }
    else{
        echo "Incorrect password";
    }
}
echo "<h2>Please enter the correct username</h2>";
}
}

?>