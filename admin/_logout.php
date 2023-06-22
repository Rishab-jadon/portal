<?php  
session_start();
echo "you are logout";
session_destroy();
header("Location: /portal");
?>