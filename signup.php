<?php
if (isset($_POST)) {
   $con = mysqli_connect("localhost","root","password","dbs_wms");
   $name=$_POST['name'];
   $role=$_POST['role'];
   $myusername = $_POST['e-mail'];
   $mypassword = $_POST['password']; 
   $sql = "insert into login values('$name','$role','$myusername','$mypassword')";
   $result = mysqli_query($con, $sql);
   echo '<script> alert("registraton sucessful go back and login")</script>';
   header("Location: index.html");
}
?>