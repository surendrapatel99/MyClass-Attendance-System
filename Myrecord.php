<?php
if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","project");
    $date=$_POST['date'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$class=$_POST['class'];
	$button1=$_POST['button1'];
	$button2=$_POST['button2'];
	$button3=$_POST['button3'];
	$button4=$_POST['button4'];
	$button5=$_POST['button5'];
	$button6=$_POST['button6'];
	$button7=$_POST['button7'];
	$button8=$_POST['button8'];
	$button9=$_POST['button9'];
	$button10=$_POST['button10'];
	$button11=$_POST['button11'];
	$button12=$_POST['button12'];
	$button13=$_POST['button13'];
	$button14=$_POST['button14'];
	$button15=$_POST['button15'];
	$button16=$_POST['button16'];
	$button17=$_POST['button17'];
	$button19=$_POST['button19'];
	$button20=$_POST['button20'];
	$button21=$_POST['button21'];
	$button22=$_POST['button22'];
	$button23=$_POST['button23'];
	$button24=$_POST['button24'];
	$button25=$_POST['button25'];
	$button26=$_POST['button26'];
	$button27=$_POST['button27'];
	$button28=$_POST['button28'];
	$button29=$_POST['button29'];
	$button30=$_POST['button30'];
    $sql="insert into MYATTENDANCE(Date,Start_at,End_at,Class_name,Roll_no,Student_name,Attendance) values('$date','$start','$end','$class','PG20-MCA01','Dharma Pradhan','$button1'),('$date','$start','$end','$class','PG20-MCA02','Nikhil Narayan Behera','$button2'),('$date','$start','$end','$class','PG20-MCA03','Binod Kumar Satapathy','$button3'),('$date','$start','$end','$class','PG20-MCA04','Jyotiprakash Panigrahi','$button4'),('$date','$start','$end','$class','PG20-MCA05','Kanha Sahu','$button5'),('$date','$start','$end','$class','PG20-MCA06','Surendra Patel','$button6'),('$date','$start','$end','$class','PG20-MCA07','Saudamini Mohanty','$button7'),('$date','$start','$end','$class','PG20-MCA08','Jyoti Achary','$button8'),('$date','$start','$end','$class','PG20-MCA09','Aditya Kumar Pattnaik','$button9'),('$date','$start','$end','$class','PG20-MCA10','Debasis Mohanty','$button10'),('$date','$start','$end','$class','PG20-MCA11','Manisharani Sahu','$button11'),('$date','$start','$end','$class','PG20-MCA12','Ratnakar Nayak','$button12'),('$date','$start','$end','$class','PG20-MCA13','Pradeep Kumar Rout','$button13'),('$date','$start','$end','$class','PG20-MCA14','Subhashree Sibani Sahu','$button14'),('$date','$start','$end','$class','PG20-MCA15','Chittaranjan Mahapatra','$button15'),('$date','$start','$end','$class','PG20-MCA16','Bhabanisankar Parida','$button16'),('$date','$start','$end','$class','PG20-MCA17','Digdarsani Sahu','$button17'),('$date','$start','$end','$class','PG20-MCA18','NULL','NULL'),('$date','$start','$end','$class','PG20-MCA19','Reshma Maharana','$button19'),('$date','$start','$end','$class','PG20-MCA20','Simran Bisoyi','$button20'),('$date','$start','$end','$class','PG20-MCA21','Pritishree Hota','$button21'),('$date','$start','$end','$class','PG20-MCA22','T Tapaswini Patro','$button22'),('$date','$start','$end','$class','PG20-MCA23','Shradhanjali Behera','$button23'),('$date','$start','$end','$class','PG20-MCA24','Tapaswani Behera','$button24'),('$date','$start','$end','$class','PG20-MCA25','Sagar Panigrahi','$button25'),('$date','$start','$end','$class','PG20-MCA26','Rabi Narayan Sethi','$button26'),('$date','$start','$end','$class','PG20-MCA27','Biswajit Pradhan','$button27'),('$date','$start','$end','$class','PG20-MCA28','Sonali Rani Panda','$button28'),('$date','$start','$end','$class','PG20-MCA29','Dayamaya Pradhan','$button29'),('$date','$start','$end','$class','PG20-MCA30','Shanti Sabara','$button30')";
    if(mysqli_query($conn,$sql)){
    echo "<script>alert('Successfully Saved!')</script>";
 echo "<script>window.location='Attendance.php'</script>";
}else{
	echo "<script>alert('Not Successfully Saved!')</script>";
}
}  
?>