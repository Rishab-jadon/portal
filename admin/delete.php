
<?php 
$conn=mysqli_connect('localhost','root','','workshop_portal');
$id=$_GET['wid'];
$sql="DELETE FROM `workshop` WHERE workshop_id=$id";
$result=mysqli_query($conn,$sql);
header("Location: /portal/admin/co_workshop.php");
?>
