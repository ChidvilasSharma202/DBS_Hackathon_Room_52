<?php
if (isset($_POST)) {
   $con = mysqli_connect("localhost","root","password","dbs_wms");
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 
   $sql = "SELECT * FROM login WHERE username = '$myusername' and passcode = '$mypassword'";
   $result = mysqli_query($con, $sql);
      if(mysqli_num_rows($result) === 0){
         echo "Your Login Name or Password is invalid";
      }
      else{
         $sql1="SELECT name from login WHERE username = '$myusername' and passcode = '$mypassword'";
         $result1=mysqli_query($con, $sql);
         $row = mysqli_fetch_array($result1, MYSQLI_NUM);
         $name=$row[0];
         session_start();
         $_SESSION['name'] = $name;
         header("Location: WM.php");
      }
}
?>