<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include '_dbconnect.php';
    $role=$_POST['role'];
    $email=$_POST['username'];
    $pass=$_POST['password'];

   if($role=="sel"){
    header("Location: /portal/");
    echo "<div class='alert alert-danger'>
        <strong>Danger!</strong> Incorrect Password
      </div>";
   }
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
       
        echo "<div class='alert alert-danger'>
        <strong>Danger!</strong> Incorrect Password
      </div>";
      header("Location: /portal/?login=password do not matched");
    }
}
echo "<h2><div class='alert alert-danger'>
<strong>Danger!</strong> Please enter the correct username
</div></h2>";
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
        echo "<div class='alert alert-danger'>
        <strong>Danger!</strong> Incorrect Password
      </div>";
      header("Location: /portal/?login=password do not matched");
    }
}
echo "<h2><div class='alert alert-danger'>
<strong>Danger!</strong> Please enter the correct username
</div></h2>";
}
}

?>
</html>