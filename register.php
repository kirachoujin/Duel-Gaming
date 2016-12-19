<?php

$conexion = mysqli_connect("localhost", "root", "", "duelgaming_db") or die (mysqli_error());

$ID = '';
$username = $_POST['username'];
$password = $_POST['password'];
$SHA_1 = SHA1($password);
$email = $_POST['email'];
$status = 0;

$verify_user_email = mysqli_query($conexion, "SELECT Email FROM users WHERE Email='$email'");
$verify_username = mysqli_query($conexion, "SELECT Username FROM users WHERE Username='$username'");
$register_user = "INSERT INTO users (ID, Username, Password, Email, Status) VALUES ('$ID', '$username', '$SHA_1', '$email', '$status')";

   if (mysqli_num_rows($verify_user_email) > 0) {
   	echo '<script>
    alert("Error. User with that email already exists.");
    window.history.go(-1);
   	</script>';
   	exit;
   } 

   if (mysqli_num_rows($verify_username) > 0) {
   	echo '<script>
    alert("Error. User with that username already exists.");
    window.history.go(-1);
   	</script>';
   	exit;
   }

$result = mysqli_query($conexion, $register_user);

    if (!$result) {
        echo '<script>
        alert("Error. An error ocurred while registering the user.");
        window.history.go(-1);
        </script>';
    } else {
    	echo '<script>
        alert("Message. Congratulations, you have been registered successfully.");
        window.history.go(-1);
    	</script>';
    }

mysqli_close($conexion);
//end of registration...

?>













