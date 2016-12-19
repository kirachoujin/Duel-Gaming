<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "duelgaming_db") or die (mysqli_error());
$username = $_POST['username'];
$password = $_POST['password'];
$SHA1 = SHA1($password);

$verify_status = mysqli_query($conexion, "SELECT * FROM users WHERE Username='$username' AND Password='$SHA1'");

   if (mysqli_num_rows($verify_status) > 0) {
   	    $user = mysqli_fetch_assoc($verify_status);
   	       if ($user['Status'] == 1) {
   	       	   echo '<script>
               alert("Error. You are banned.");
               window.history.go(-1);
   	       	   </script>';
   	       } else {
   	       	    $_SESSION['u_user'] = $username;
   	       	    header("Location: menu.php");
   	       }
   } else {
   	   echo '<script>
       alert("Error. Incorrect data");
       window.history.go(-1);
   	   </script>';
   }


?>