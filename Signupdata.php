<?php
if(isset($_POST['submit1'])){
    $conn=mysqli_connect("localhost","root","","PROJECT");
    $name=$_POST['username'];
	$pass=$_POST['psw'];
    $sql="insert into SIGNUP(Username,Password) values('$name','$pass')";
    if(mysqli_query($conn,$sql)){
		echo "<script>alert('Registered successfully!')</script>";
     echo "<script>window.location='index.html'</script>";	
}else{
	echo "Not successfully registered.";
}
}  
?>