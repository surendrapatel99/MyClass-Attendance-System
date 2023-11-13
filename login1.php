<?php
session_start();

if(isset($_POST['submit2'])){
	$conn=mysqli_connect("localhost","root","","PROJECT");
	$username = $_POST['uname'];  
    $password = $_POST['pass'];  
	$sql = "select * from SIGNUP where Username='$username' and Password='$password'"; 
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result); 	
 if ($row['Username'] === $username && $row['Password'] === $password) {
	 /*session_register("username");*/
	 $_SESSION['username']= "username";
     $_SESSION['login_user'] = $username;
     header('location:Attendance.php');
}
}
else{
 echo "<script>alert('Invalid!')</script>";
 echo "<script>window.location='index.html'</script>";
}
}
?> 
