<?php
$conn = mysqli_connect("localhost","root","");
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully.";

echo "<br>";

$sql = "CREATE DATABASE PROJECT";
if (mysqli_query($conn,$sql))
{
	echo "Database created successfully.";
}
else
{
	echo "Error creating database:".mysqli_error($conn);
}

echo "<br>";

$conn = mysqli_connect("localhost","root","","PROJECT");
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
echo "Connected successfully.";

echo "<br>";

$sql = "CREATE TABLE SIGNUP(Username VARCHAR(20),Password VARCHAR(20))";
if (mysqli_query($conn,$sql))
{
	echo "Table SIGNUP created successfully.";
}
else
{
	echo "Error creating table:".mysqli_error($conn);
}
$sql = "CREATE TABLE MYATTENDANCE(Id INT AUTO_INCREMENT PRIMARY KEY,Date DATE,Start_at TIME,End_at TIME,Class_name VARCHAR(50),Roll_no VARCHAR(20),Student_name VARCHAR(50),Attendance VARCHAR(20))";
if (mysqli_query($conn,$sql))
{
	echo "Table MYATTENDANCE created successfully.";
}
else
{
	echo "Error creating table:".mysqli_error($conn);
}
?>

echo "<br>";
echo "<br>";
?>